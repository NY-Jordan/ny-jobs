<?php

namespace Tests\Feature;

use App\Models\Job;
use Tests\TestCase;
use App\Models\Offers;
use App\Models\Company;
use App\Models\JobPackage;
use Illuminate\Support\Facades\Auth;
use Database\Factories\OffersFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 
     *
     * @return void
     */
    public function test_can_be_create_new_job_without_package_or_subscription() : void
    {
        //$this->withoutExceptionHandling();
        $company = Company::factory()->create();
        Auth::login($company);
        $response = $this->post('/job/create', [
            "title" => "Title test",
            "description" => "Description test",
            "type" => "Full time",
            "location" => "Location test",
            "image" => "dgdg/sdgsdg",
            "apply_by" => "Email",
            "to_apply" => "email@test.com",
            "company_id" => $company->id,
        ]);;


        $response->assertRedirect('/offers');
    }

    /**
     * test if i can add a job if i have take a package
     *
     * @return void
     */
    public function test_can_be_create_new_job_with_package() : void
    {
        //$this->withoutExceptionHandling();
        $company = Company::factory()->create();
        Auth::login($company);
        Offers::factory()->create();
        JobPackage::factory()->create();
        $response = $this->post('/job/create', [
            "title" => "Title test",
            "description" => "Description test",
            "type" => "Full time",
            "location" => "Location test",
            "image" => "dgdg/sdgsdg",
            "apply_by" => "Email",
            "to_apply" => "ihjmhjm",
        ]);;

        $this->assertEquals(1, JobPackage::count());
        $this->assertEquals(1, Offers::count());
        $this->assertEquals(1, Job::count());
        $response->assertRedirect('acccount');
    }
}
