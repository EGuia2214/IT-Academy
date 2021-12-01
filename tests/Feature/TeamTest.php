<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;//RefreshDatabase solo se usa en fase de producción
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Team;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Database\Factories\TeamFactory;


class TeamTest extends TestCase
{  
    use RefreshDatabase, WithoutMiddleware;//RefreshDatabase solo se usa en fase de producción
    
    /** @test */
    public function list_of_teams_can_be_retrieved()//prueba que muestra formulario por get
    { 
        
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();

        $response = $this->get('api/dashboard/teams');

        $response->assertStatus(200);
       //$response->assertViewIs('teams'); falla al no estar  la lista creada
    }


    /** @test */
    public function a_team_can_be_retrieved()//prueba que muestra formulario por get
    { 
        
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();

        $response = $this->get('api/dashboard/teams/show/{id}');

        $response->assertStatus(200);
        //$response->assertViewIs('teams'); falla al no estar  la lista creada
    }








    /** @test */
    public function a_team_can_be_created()//prueba que muestra formulario por get
    { 
        
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();

        $response = $this->get('api/dashboard/teams/create');

        $response->assertStatus(200);
    }



    
    
    /** @test */
    public function a_team_can_be_stored()
    { 
      
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
    

        $response = $this->withSession(['banned' => false])->post('api/dashboard/teams/store', [
            'team_name' => 'Team_name',
            'stadium' => 'Name_of_stadium',
            'foundation_year' => '1900',
            'city' => "Name_of_a_city"

        ]);

    
        $response-> assertOK();
        $this->assertCount(1, Team::all());

        $team = Team::first();

        $this->assertEquals($team->team_name, 'Team_name' );
        $this->assertEquals($team->stadium, 'Name_of_stadium');
        $this->assertEquals($team->foundation_year, '1900');
        $this->assertEquals($team->city, 'Name_of_a_city');
 
    }

        /** @test */
        public function a_team_can_be_edited()//Solo prueba que muestra formulario por get
        { 
            
            $this->withoutExceptionHandling();
            $this->withoutMiddleware();
    
            $response = $this->get('api/dashboard/teams/edit/{id}');
    
            $response->assertStatus(200);
        }




       /** @test */
       public function a_team_can_be_updated()
       { 
         
           $this->withoutExceptionHandling();
           $this->withoutMiddleware();

           $team = Team::factory(1)->create();
           $team = $team [0]; //sojo el primer objeto y lo manda a actualizar
       
   
           $response = $this->withSession(['banned' => false])->put('api/dashboard/teams/'.$team->id  , [/*por olvido
            no está UPDATE en el enrutado. Solamente en el nombre*/
               'id' => $team->id ,
               'team_name' => 'Team_name',
               'stadium' => 'Name_of_stadium',
               'foundation_year' => '1900',
               'city' => "Name_of_a_city"
   
           ]);
   
       
           $response-> assertOK();
           $this->assertCount(1, Team::all());
   
           $team = $team->fresh();
   
           $this->assertEquals($team->team_name, 'Team_name' );
           $this->assertEquals($team->stadium, 'Name_of_stadium');
           $this->assertEquals($team->foundation_year, '1900');
           $this->assertEquals($team->city, 'Name_of_a_city');
    
       }


        /** @test */
         public function a_team_can_be_deleted()
        { 
               
            $this->withoutExceptionHandling();
            $this->withoutMiddleware();
      
            $team = Team::factory(1)->create();
            $team = $team [0]; //cojo el primer objeto y lo borro
       
         
            $response = $this->withSession(['banned' => false])->delete('api/dashboard/teams/destroy/'.$team->id);
         
             
            $response-> assertOK();
            $this->assertCount(0, Team::all());

          
        }
}
