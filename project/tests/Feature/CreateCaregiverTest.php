<?php

namespace Tests\Feature;

use App\Agency;
use App\Caregiver;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateCaregiverTest extends TestCase
{
    use RefreshDatabase;

    /**
     * An agency to test.
     *
     * @var  \App\Agency
     */
    protected $agency = null;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->agency = factory(Agency::class)->create();
    }

    /** @test  */
    public function a_caregiver_can_be_created()
    {
        $this->assertEquals(0, $this->agency->caregivers()->count());

        $response = $this->post(
            $url = route('caregivers.store', $this->agency),
            $caregiverAttributes = factory(Caregiver::class)->raw()
        );

        $response
            ->assertStatus(302)
            ->assertSessionHas('status', 'Caregiver created!');

        $this->assertEquals(1, $this->agency->caregivers()->count());
    }

    /**
     * Form validation provider.
     *
     * @return  array
     */
    public function formValidationProvider()
    {
        return [
            ['name'],
            ['email'],
            ['position'],
        ];
    }

    /**
     * @test
     * @dataProvider formValidationProvider
     */
    public function required_inputs_must_be_present($formInput)
    {
        $response = $this->post(
            $url = route('caregivers.store', $this->agency),
            $caregiverAttributes = factory(Caregiver::class)->raw([$formInput => ''])
        );

        $response
            ->assertStatus(302)
            ->assertSessionHasErrors([$formInput]);
    }

    /** @test  */
    public function an_invalid_email_is_not_allowed()
    {
        $response = $this->post(
            $url = route('caregivers.store', $this->agency),
            $caregiverAttributes = factory(Caregiver::class)->raw(['email' => 'invalid-email.com'])
        );

        $response
            ->assertStatus(302)
            ->assertSessionHasErrors(['email']);
    }

    /** @test  */
    public function an_invalid_position_is_not_allowed()
    {
        $response = $this->post(
            $url = route('caregivers.store', $this->agency),
            $caregiverAttributes = factory(Caregiver::class)->raw(['position' => 'Invalid Position'])
        );

        $response
            ->assertStatus(302)
            ->assertSessionHasErrors(['position']);
    }

    /** @test  */
    public function non_skilled_nurses_do_not_require_license_information()
    {
        $caregiverAttributes = factory(Caregiver::class)->raw([
            'position' => 'Home Health Aid',
            'license_number' => null,
            'license_expiration' => null
        ]);

        $response = $this->post(route('caregivers.store', $this->agency), $caregiverAttributes);

        $response
            ->assertStatus(302)
            ->assertSessionHas('status', 'Caregiver created!');
    }

    /** @test  */
    public function skilled_nurses_do_require_license_information()
    {
        $caregiverAttributes = factory(Caregiver::class)->raw([
            'position' => 'Skilled Nurse',
            'license_number' => null,
            'license_expiration' => null
        ]);

        $response = $this->post(route('caregivers.store', $this->agency), $caregiverAttributes);

        $response
            ->assertStatus(302)
            ->assertSessionHasErrors(['license_number', 'license_expiration']);
    }

    /** @test  */
    public function skilled_nurses_can_be_created_with_license_information()
    {
        $caregiverAttributes = factory(Caregiver::class)->raw([
            'position' => 'Skilled Nurse',
            'license_number' => '123456',
            'license_expiration' => '2020-01-01'
        ]);

        $response = $this->post(route('caregivers.store', $this->agency), $caregiverAttributes);

        $response
            ->assertStatus(302)
            ->assertSessionHas('status', 'Caregiver created!');
    }
}
