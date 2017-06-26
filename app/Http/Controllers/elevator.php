<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

/*
First there is an elevator class.
It has a direction (up, down, stand, maintenance), a current floor and a list of floor requests sorted in the direction.
Each elevator has a set of signals: Alarm, Door open, Door close

The scheduling will be like:
if available pick a standing elevator for this floor.
else pick an elevator moving to this floor.
else pick a standing elevator on another floor.

Sample data:
- Elevator standing in first floor
- Request from 6th floor go down to ground(first floor).
- Request from 5th floor go up to 7th floor
- Request from 3rd floor go down to ground
- Request from ground go up to 7th floor.
- Floor 2 and 4 are in maintenance.
*/

class elevator extends BaseController {

    public $direction = 'stand'; //up, down, stand, maintenance
    public $signals = ['Alarm', 'Door open', 'Door close'];
    public $route; //[5,7,6];
    public $current_floor = 1;
    
    public function call(Request $request) {
        //Delete previous log file
        if (file_exists(public_path('log.txt'))) {
            unlink(public_path('log.txt'));
        }
        
        $this->route = $request->all();
        $current = $this->current_floor;
        $count = 1;

        foreach ($this->route as $next_stop) {
            if($this->current_floor < $next_stop) {
                $this->move_up($next_stop);
            }
            else if($this->current_floor > $next_stop) {
                $this->move_down($next_stop);
            }  
            $this->write_log('Elevator in floor: ' . $this->current_floor);
            $this->write_log("Elevator direction is: $this->direcion");
           
           if($count < count($this->route)) {
                $this->write_log('Elevator ' . $this->signals[1]);
                $this->write_log('Elevator ' . $this->signals[2]);
            }
            
            $count++;
        }

        return response()->download(public_path('log.txt'));
    }

    public function move_up($next_stop) {
        $this->direcion = 'up';
        $this->write_log('Elevator direction is: ' . $this->direcion);

        while ($this->current_floor < $next_stop) {
            $this->write_log('Elevator in floor: ' . $this->current_floor);
            $this->current_floor++;
        } 
        //Elevator arrives to requested floor
        $this->direcion = 'stand';
    }

    public function move_down($next_stop) {
        $this->direcion = 'down';
        $this->write_log('Elevator direction is: ' . $this->direcion);

        while ($this->current_floor > $next_stop) {
            $this->write_log('Elevator in floor: ' . $this->current_floor);
            $this->current_floor--;
        } 
        $this->direcion = 'stand';
    }

    public function write_log($text) {
        file_put_contents(public_path('log.txt'), $text . PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}
