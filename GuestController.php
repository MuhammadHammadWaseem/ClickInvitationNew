<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Auth;


class GuestController extends Controller
{
    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    // public function newguest(Request $request)
    // {

	// 	$guest=new \App\Guest;
    //     $guest->name=$request->nameguest;
    //     if($request->has('emailguest')) $guest->email=$request->emailguest;
    //     if($request->has('phoneguest')) $guest->phone=$request->phoneguest;
    //     if($request->has('whatsappguest')) $guest->whatsapp=$request->whatsappguest;
    //     $guest->mainguest=$request->mainguest;
    //     $guest->parent_id_guest=$request->parentidguest;
    //     $guest->id_event=$request->idevent;
    //     $guest->allergies=$request->allergiesguest;
    //     //$guest->id_meal=$request->idmealguest;
    //     if($request->has('idmealguest')){
    //         $guest->id_meal=$request->idmealguest;
    //         $guest->opened=NULL;
    //     } 
    //     $guest->members_number=$request->membernumberguest;
    //     if($request->has('notesguest')) $guest->notes=$request->notesguest;
    //     $guest->code= substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 20);

	// 	$guest->save();
	// 	return 1;
    // }
    public function newguest(Request $request)
    {
        $guest = new \App\Guest;
        $guest->name = $request->nameguest;
        $guest->email = $request->has('emailguest') ? $request->emailguest : null;
        $guest->phone = $request->has('phoneguest') ? $request->phoneguest : null;
        $guest->whatsapp = $request->has('whatsappguest') ? $request->whatsappguest : null;
        $guest->mainguest = $request->mainguest;
        $guest->parent_id_guest = $request->parentidguest;
        $guest->id_event = $request->idevent;
        $guest->allergies = $request->allergiesguest;
        $guest->id_meal = $request->has('idmealguest') ? $request->idmealguest : null;
        $guest->opened = $request->has('idmealguest') ? null : 'NULL'; // Adjust this line if necessary
        $guest->members_number = $request->membernumberguest;
        $guest->notes = $request->has('notesguest') ? $request->notesguest : null;
        $guest->code = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 20);
    
        $guest->save();
        return 1;
    }
    

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function showguests(Request $request)
    {
		$guests=\App\Guest::where('id_event', $request->idevent)->where('mainguest', 1)->get();
        foreach($guests as $g){
            $g->members=\App\Guest::where('id_event', $request->idevent)->where('mainguest', 0)->where('parent_id_guest', $g->id_guest)->get();
            foreach($g->members as $gm){
                if($gm->id_meal!=0) $gm->meal=\App\Meal::where('id_meal', $gm->id_meal)->first();
            }
            foreach($g->members as $gm){
                if($gm->id_table!=0) $gm->table=\App\Table::where('id_table', $gm->id_table)->first();
            }
        }
        foreach($guests as $g){
            if($g->id_meal!=0) $g->meal=\App\Meal::where('id_meal', $g->id_meal)->first();
        }
        foreach($guests as $g){
            if($g->id_table!=0) $g->table=\App\Table::where('id_table', $g->id_table)->first();
        }
		return $guests;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function showguestsforadmin(Request $request)
    {
        $allevents=\App\Event::where('id_user', Auth::id())->select('id_event')->get();
        $guests=\App\Guest::whereIn('id_event', $allevents)->where('mainguest', 1)->get();
        foreach($guests as $g){
            $g->members=\App\Guest::whereIn('id_event', $allevents)->where('mainguest', 0)->where('parent_id_guest', $g->id_guest)->get();
            foreach($g->members as $gm){
                if($gm->id_meal!=0) $gm->meal=\App\Meal::where('id_meal', $gm->id_meal)->first();
            }
            foreach($g->members as $gm){
                if($gm->id_table!=0) $gm->table=\App\Table::where('id_table', $gm->id_table)->first();
            }
        }
        foreach($guests as $g){
            if($g->id_meal!=0) $g->meal=\App\Meal::where('id_meal', $g->id_meal)->first();
        }
        foreach($guests as $g){
            if($g->id_table!=0) $g->table=\App\Table::where('id_table', $g->id_table)->first();
        }
        return $guests;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function allguests(Request $request)
    {
        $events=\App\Event::where('id_user', Auth::id())->where('id_event','!=',$request->idevent)->get();
        foreach($events as $event)
            $event->guests=\App\Guest::where('id_event', $event->id_event)->where('mainguest', 1)->get();
        return $events;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function allguestsnotnested(Request $request)
    {
        $guests=\App\Guest::where('id_event', $request->idevent)->where('declined', '!=', 1)->get();
        foreach($guests as $guest)
            if($guest->id_table!=0){
                $table=\App\Table::where('id_table',$guest->id_table)->first();
                if($table)$guest->tablename=$table->name;
            }
        return $guests;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function showopguests(Request $request)
    {

        $guest=\App\Guest::where('id_guest',$request->idguest)->first();
        if($guest->id_table) $guest->table=\App\Table::where('id_table',$guest->id_table)->first();
        if($guest){
            $guests=\App\Guest::where('parent_id_guest',$guest->id_guest)->get();
            foreach($guests as $g){
                if($g->id_table) $g->table=\App\Table::where('id_table',$g->id_table)->first();
            }
            $guest->childs=$guests;
            return $guest;
        }
    }


    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function delguest(Request $request)
    {

        $guest=\App\Guest::where('id_guest',$request->guestid)->first();
        if($guest){
            $event=\App\Event::where('id_event',$request->idevent)->first();
            if($event && $event->id_user==Auth::id()){
                $guests=\App\Guest::where('parent_id_guest',$request->guestid)->get();
                foreach($guests as $gu) $gu->delete();
                $guest->delete();
            }
            else return 0;
        }
        else return 0;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function delguestforadmin(Request $request)
    {

        $guest=\App\Guest::where('id_guest',$request->guestid)->first();
        if($guest){
            $guests=\App\Guest::where('parent_id_guest',$request->guestid)->get();
            foreach($guests as $gu) $gu->delete();
            $guest->delete();
        }
        else return 0;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function delmemberattending(Request $request)
    {

        $guest=\App\Guest::where('id_guest',$request->guestid)->first();
        if($guest){
            $guest->delete();
        }
        else return 0;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function declineguest(Request $request)
    {

        $guest=\App\Guest::where('id_guest',$request->guestid)->first();
        if($guest){
            $event=\App\Event::where('id_event',$request->idevent)->first();
            if($event && $event->id_user==Auth::id()){
                $guest->declined=1;
                $guest->save();
            }
            else return 0;
        }
        else return 0;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function undeclineguest(Request $request)
    {

        $guest=\App\Guest::where('id_guest',$request->guestid)->first();
        if($guest){
            $event=\App\Event::where('id_event',$request->idevent)->first();
            if($event && $event->id_user==Auth::id()){
                $guest->declined=0;
                $guest->save();
            }
            else return 0;
        }
        else return 0;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function editguest(Request $request)
    {

        $guest=\App\Guest::where('id_guest',$request->idguest)->first();
        if($guest){
            $guest->name=$request->nameguest;
            $guest->email=$request->emailguest;
            $guest->phone=$request->phoneguest;
            $guest->whatsapp=$request->whatsappguest;
            $guest->allergies=$request->allergiesguest;
            if($request->has('idmealguest')) $guest->id_meal=$request->idmealguest;
            $guest->notes=$request->notesguest;
            if($guest->mainguest) $guest->members_number=$request->membernumberguest;
 
            $guest->save();
            return 1;
        }
        else return 0;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function editopguest(Request $request)
    {

        $guest=\App\Guest::where('id_guest',$request->idguest)->first();
        if($guest){
            $guest->name=$request->nameguest;
            $guest->email=$request->emailguest;
            $guest->phone=$request->phoneguest;
            $guest->whatsapp=$request->whatsappguest;
            $guest->allergies=$request->allergiesguest;
            if($request->has('idmealguest') && $request->idmealguest!=null){
                $guest->id_meal=$request->idmealguest;
                $guest->opened=2;
            }
            $guest->notes=$request->notesguest;
            if($guest->mainguest) $guest->members_number=$request->membernumberguest;
    
            $guest->save();
            return 1;
        }
        else return 0;
    }

    public function confirmGuest(Request $request)
    {
        dd($request->all());
        $guest=\App\Guest::where('id_guest',$request->idguest)->first();
        if($guest){
            $guest->opened=2;
            $guest->save();
            return 1;
        }
        return 0;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function importfromoe(Request $request)
    {
        $allevents=$request->allguests;
        foreach($allevents as $ievent){
            if($ievent['guests']!=[]){
                foreach($ievent['guests'] as $iguest){
                    if(array_key_exists('selected', $iguest) && $iguest['selected']==1){
                        $guest=new \App\Guest;
                        $guest->name=$iguest['name'];
                        $guest->phone=$iguest['phone'];
                        $guest->whatsapp=$iguest['whatsapp'];
                        $guest->email=$iguest['email'];
                        $guest->id_event=$request['idevent'];
                        $guest->allergies=$iguest['allergies'];
                        $guest->mainguest=1;
                        $guest->parent_id_guest=0;
                        $guest->members_number=$iguest['members_number'];
                        $guest->notes=$iguest['notes'];
                        $guest->code= substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 20);
                        $guest->save();                        
                    }
                }
            }
        }
        return $allevents;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function importfromcsv(Request $request)
    {
        foreach($request->guests as $g){
            $guest=new \App\Guest;
            $guest->name=$g['name'];
            $guest->email=$g['email'];
            $guest->phone=$g['phone'];
            $guest->whatsapp=$g['whatsapp'];
            $guest->mainguest=1;
            $guest->parent_id_guest=0;
            $guest->notes=$g['notes'];
            $guest->id_event=$request->idevent;
            $guest->members_number=$g['nummembers'];
            $guest->code= substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 20);
            $guest->save();
        }
        return $request->guests;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function changecheck(Request $request)
    {
        $guest=\App\Guest::where('id_guest', $request->idguest)->first();
        if($guest){
            if($guest->checkin==1) $guest->checkin=0;
            else $guest->checkin=1;
            $guest->save();
        }
        return 1;
    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function mymembers(Request $request)
    {
        $members=\App\Guest::where('mainguest', 0)->where('parent_id_guest', $request->idgroup)->get();
        foreach($members as $gm){
            if($gm->id_meal!=0) $gm->meal=\App\Meal::where('id_meal', $gm->id_meal)->first();
        }
        foreach($members as $gm){
            if($gm->id_table!=0) $gm->table=\App\Table::where('id_table', $gm->id_table)->first();
        }
        return $members;

    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function mygroup(Request $request)
    {
        $group=\App\Guest::where('id_guest',$request->idgroup)->first();
        if($group->id_meal!=0) $group->meal=\App\Meal::where('id_meal', $group->id_meal)->first();
        if($group->id_table!=0) $group->table=\App\Table::where('id_table', $group->id_table)->first();

        return $group;

    }

    /**
     * Effettua login.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function openedanswered(Request $request)
    {
        $guest=\App\Guest::where('id_guest',$request->idguest)->first();
        if($guest->opened!=2){
            $guest->opened=$request->opened;
            $guest->save();            
        }

        return 'ok';

    }

}