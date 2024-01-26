@include('includes.Adminheader')
    <section>
        <div class="side_section">
            <p>Dit is voor de dagen</p>

            <table>
                <tr>
                  <th>Start tijd</th>
                  <th>Eind tijd</th>
                  <th>status</th>
                  <th>verander status</th>
                </tr>
                @foreach($maandag as $dag1)
                <tr>
                  <td>{{$dag1->StartUurVanDag}}</td>
                  <td>{{$dag1->EindUurVanDag}}</td>
                  <td>
                    @if ($dag1->Status == 0)Geen les 
                    @elseif ($dag1->Status == 1)Vrije les 
                    @elseif ($dag1->Status == 2)Genomen les 
                    @else Geen les 
                    @endif
                  </td>
                  <td>
                    <form action="" method="post"></form>
                  </td>
                </tr>
                @endforeach
                @foreach ($maandag as $dag1)
                <div class="time @if ($dag1->Status == 0)dayNoday @elseif ($dag1->Status == 1)dayFree @elseif ($dag1->Status == 2)dayTakken @else dayNoday @endif">
                <ul>
                    <li>{{$dag1->StartUurVanDag}}</li>
                    <li>{{$dag1->EindUurVanDag}}</li>
                    <hr>
                </ul>
                </div>
                @endforeach 
                <tr>
                  <td>Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                </tr>
              </table>

        </div>
        <div class="side_section">
            <p>Dit is voor het goedkeuren</p>
        </div>
    </section>
@include('includes.Adminfooter')

