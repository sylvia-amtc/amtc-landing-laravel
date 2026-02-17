<?php

namespace Tests\Feature;

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_leads_table_exists(): void
    {
        $this->assertTrue(
            \Illuminate\Support\Facades\Schema::hasTable('leads')
        );
    }

    public function test_leads_table_has_all_columns(): void
    {
        $columns = [
            'id', 'name', 'email', 'company', 'role', 'interest',
            'distribution_points', 'utm_source', 'utm_medium', 'utm_campaign',
            'created_at', 'updated_at',
        ];

        foreach ($columns as $column) {
            $this->assertTrue(
                \Illuminate\Support\Facades\Schema::hasColumn('leads', $column),
                "Column {$column} missing from leads table"
            );
        }
    }

    public function test_lead_can_be_created(): void
    {
        $lead = Lead::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'company' => 'Acme Inc',
            'role' => 'CTO',
            'interest' => 'distribution',
            'distribution_points' => '100',
            'utm_source' => 'google',
            'utm_medium' => 'cpc',
            'utm_campaign' => 'launch',
        ]);

        $this->assertDatabaseHas('leads', ['email' => 'john@example.com']);
        $this->assertEquals('John Doe', $lead->name);
    }

    public function test_lead_only_requires_name_and_email(): void
    {
        $lead = Lead::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        $this->assertDatabaseHas('leads', ['email' => 'jane@example.com']);
        $this->assertNull($lead->company);
    }

    public function test_lead_fillable_fields(): void
    {
        $expected = [
            'name', 'email', 'company', 'role', 'interest',
            'distribution_points', 'utm_source', 'utm_medium', 'utm_campaign',
        ];

        $lead = new Lead();
        $this->assertEquals($expected, $lead->getFillable());
    }
}
