<div class="back_calendar">
    <div class="calendar">
        <div class="calendar_day">
            <div class="cheader"><p>DAG </p></div>
            <div class="cday_body">
                <h1>leerlingen</h1>
                @foreach ($Leer as $Leerling)
                <ul>
                    <li>{{$Leerling->id}}</li>
                    <li>{{$Leerling->naam}}</li>
                    <li>{{$Leerling->email}}</li>
                    <li>{{$Leerling->telefoon}}</li>
                    <li>{{$Leerling->niveau}}</li>
                    <li>{{$Leerling->startDatum}}</li>
                    <li>{{$Leerling->eindDatum}}</li>
                    <li>{{$Leerling->opmerkingen}}</li>
                    <hr>
                </ul>
                @endforeach 
                <h1>PLanning</h1>
                @foreach ($Plan as $Planning)
                <ul>
                    <li>{{$Planning->LeerlingId}}</li>
                    <li>{{$Planning->LesId}}</li>
                    <hr>
                </ul>
                @endforeach 
                <h1>Lessen</h1>
                @foreach ($Les as $Lessen)
                <ul>
                    <li>{{$Lessen->id}}</li>
                    <li>{{$Lessen->startTijd}}</li>
                    <li>{{$Lessen->eindTijd}}</li>
                    <li>{{$Lessen->datum}}</li>
                    <li>{{$Lessen->opmerkingen}}</li>
                    <hr>
                </ul>
                @endforeach
                <h1>Week lessen</h1> 
                @foreach ($AlleDagen as $Weekles)
                <ul>
                    <li>{{$Weekles->id}}</li>
                    <li>{{$Weekles->startTijd}}</li>
                    <li>{{$Weekles->eindTijd}}</li>
                    <li>{{$Weekles->datum}}</li>
                    <li>{{$Weekles->opmerkingen}}</li>
                    <hr>
                </ul>
                @endforeach       
            </div>
        <div class="cfooter"></div>
        </div>
        <div class="calendar_month">
            <div class="cheader">
                <button><</button>
                <label for="Month">...MONTH...</label>
                <button>></button>
            </div>
            <div class="cbody">
                <div class="cday">
                    <h3>Maandag</h3>
                </div>
                <div class="cday">
                    <h3>Dinsdag</h3>
                </div>
                <div class="cday">
                    <h3>Woensdag</h3>
                </div>
                <div class="cday">
                    <h3>Donderdag</h3>
                </div>
                <div class="cday">
                    <h3>Vrijdag</h3>
                </div>
                <div class="cday">
                    <h3>Zaterdag</h3>
                </div>
                <div class="cday">
                    <h3>Zondag</h3>
                </div>
            </div>
            <div class="cfooter">
                <p>genomen</p>
                <p>vrij</p>
            </div>
        </div>
    </div>
    {{-- 
        /* ========
    Calendar
======== */

.back_calendar{
    width: 100%;
    height: 90%;
    padding: 20px;
    background-color: var(--whitetrans);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.calendar{
    min-width: 400px;
    width: 100%;
    height: 100%;
    display: flex;
}
.calendar_day{
    width: 40%;
    background-color: var(--grey);
    border-right: solid 2px var(--orange);
}

.calendar_month{
    width: 60%;
    background-color: var(--grey);
}

.cheader{
    width: 100%;
    height: 10%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: var(--darkgrey);
}

.cbody{
    width: 100%;
    height: 80%;
    display: flex;
    flex-direction: row;
}

.cfooter{
    width: 100%;
    height: 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: var(--darkgrey);
}

.cday{
    width: 14.286%;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.chour{
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: transparent;
    border: none;
}




.cday label{
    font-size: 13px;
    letter-spacing: 1px;
    font-weight: 0  ;
    color: var(--whitetrans);
}

.cday h1{
    font-size: 37px;;
    font-weight: 500;
    color: var(--white);
}


.cday_body{
    width: 100%;
    height: 80%;
    overflow-y: auto;
}

.cplanned{
    width: 100%;
    height: 70px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;}

.cplanned div{
    display: flex;
    width: min-content;
    height: auto;
}

.cplanned p{
    font-size: 13px;
    font-family: 'Ubuntu', sans-serif;
}


//DATAABASE
        $Leerling = DB::table('leerling')->get();
        $Lessen = DB::table('Les')->get();
        $Planning = DB::table('Planning')->get();

        // TIME
        $VandaagDatum = Carbon::now()->format('d-m-Y');
        $Nu = Carbon::now();
        $WeekNummer = $Nu->weekOfYear;


        $datum = DB::table('les')->select('datum')->get()
        //->dd()
        ;
        $DezeWeek = DB::table('les')->select('*')->whereRaw(' Week(CURRENT_DATE) = Week(datum)')->get();
        $DezeDag = DB::table('les')->select('*')->whereRaw(' Week(CURRENT_DATE) = Week(datum) And DAYOFWEEK(CURRENT_DATE) = DAYOFWEEK(datum)')->get();
        $maandag = DB::table('les')->select('*')->whereRaw(' DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) = datum')->get();
        $dinsdag = DB::table('les')->select('*')->whereRaw(' DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) + 1 DAY) = datum')->get();
        $woensdag = DB::table('les')->select('*')->whereRaw(' DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) + 2 DAY) = datum')->get();
        $donderdag = DB::table('les')->select('*')->whereRaw(' DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) + 3 DAY) = datum')->get();
        $vrijdag = DB::table('les')->select('*')->whereRaw(' DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) + 4 DAY) = datum')->get();
        $zaterdag = DB::table('les')->select('*')->whereRaw(' DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) + 5 DAY) = datum')->get();
        $zondag = DB::table('les')->select('*')->whereRaw(' DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) + 6 DAY) = datum')->get();

        dump($DezeWeek,$DezeDag,$maandag,$dinsdag, $woensdag, $donderdag, $vrijdag,   $WeekNummer, $Nu, $Planning, );

        //SELECT * From les WHERE Week(CURRENT_DATE) = Week(datum);

        return view('welcome', ['Leer' => $Leerling, 'Plan' => $Planning, 'Les' => $Lessen, 'vandaag' => $VandaagDatum, 'Nu' => $Nu, 'Week' => $WeekNummer, 'DezeWeek' => $DezeWeek, 'maandag' => $maandag, 'dinsdag' => $dinsdag, 'woensdag' => $woensdag, 'donderdag' => $donderdag, 'vrijdag' => $vrijdag, 'zaterdag' => $zaterdag, 'zondag' => $zondag]);
    }



 --}}
</div>