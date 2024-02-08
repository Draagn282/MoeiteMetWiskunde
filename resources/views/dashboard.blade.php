@include('includes.Adminheader')
    <section>
        <div class="side_section">
            <p>Dit is voor de dagen</p>

            <table>
                <tr>
                    <th>Dag</th>
                    <th>Start tijd</th>
                    <th>Eind tijd</th>
                    <th>status</th>
                    <th>verander status</th>
                </tr>
                @foreach($maandag as $uur)
                <tr>
                    <td>Maandag</td>
                  <td>{{$uur->StartUurVanDag}}</td>
                  <td>{{$uur->EindUurVanDag}}</td>
                  <td>
                    @if ($uur->Status == 0)Geen les 
                    @elseif ($uur->Status == 1)Vrije les 
                    @elseif ($uur->Status == 2)Genomen les 
                    @else Geen les 
                    @endif
                  </td>
                  <td>
                    <form action="StatusVeranderen" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$uur->id}}" hidden>
                        <input type="submit" name="Sub" value="Geen">
                        <input type="submit" name="Sub" value="Vrij">
                        <input type="submit" name="Sub" value="Genomen">
                    </form>
                  </td>
                </tr>
                @endforeach
                @foreach($dinsdag as $uur)
                <tr>
                    <td>Dinsdag</td>
                  <td>{{$uur->StartUurVanDag}}</td>
                  <td>{{$uur->EindUurVanDag}}</td>
                  <td>
                    @if ($uur->Status == 0)Geen les 
                    @elseif ($uur->Status == 1)Vrije les 
                    @elseif ($uur->Status == 2)Genomen les 
                    @else Geen les 
                    @endif
                  </td>
                  <td>
                    <form action="StatusVeranderen" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$uur->id}}" hidden>
                        <input type="submit" name="Sub" value="Geen">
                        <input type="submit" name="Sub" value="Vrij">
                        <input type="submit" name="Sub" value="Genomen">
                    </form>
                  </td>
                </tr>
                @endforeach
                @foreach($woensdag as $uur)
                <tr>
                  <td>Woensdag</td>
                  <td>{{$uur->StartUurVanDag}}</td>
                  <td>{{$uur->EindUurVanDag}}</td>
                  <td>
                    @if ($uur->Status == 0)Geen les 
                    @elseif ($uur->Status == 1)Vrije les 
                    @elseif ($uur->Status == 2)Genomen les 
                    @else Geen les 
                    @endif
                  </td>
                  <td>
                    <form action="StatusVeranderen" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$uur->id}}" hidden>
                        <input type="submit" name="Sub" value="Geen">
                        <input type="submit" name="Sub" value="Vrij">
                        <input type="submit" name="Sub" value="Genomen">
                    </form>
                  </td>
                </tr>
                @endforeach
                @foreach($donderdag as $uur)
                <tr>
                  <td>Donderdag</td>
                  <td>{{$uur->StartUurVanDag}}</td>
                  <td>{{$uur->EindUurVanDag}}</td>
                  <td>
                    @if ($uur->Status == 0)Geen les 
                    @elseif ($uur->Status == 1)Vrije les 
                    @elseif ($uur->Status == 2)Genomen les 
                    @else Geen les 
                    @endif
                  </td>
                  <td>
                    <form action="StatusVeranderen" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$uur->id}}" hidden>
                        <input type="submit" name="Sub" value="Geen">
                        <input type="submit" name="Sub" value="Vrij">
                        <input type="submit" name="Sub" value="Genomen">
                    </form>
                  </td>
                </tr>
                @endforeach
                @foreach($vrijdag as $uur)
                <tr>
                  <td>Vrijdag</td>
                  <td>{{$uur->StartUurVanDag}}</td>
                  <td>{{$uur->EindUurVanDag}}</td>
                  <td>
                    @if ($uur->Status == 0)Geen les 
                    @elseif ($uur->Status == 1)Vrije les 
                    @elseif ($uur->Status == 2)Genomen les 
                    @else Geen les 
                    @endif
                  </td>
                  <td>
                    <form action="StatusVeranderen" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$uur->id}}" hidden>
                        <input type="submit" name="Sub" value="Geen">
                        <input type="submit" name="Sub" value="Vrij">
                        <input type="submit" name="Sub" value="Genomen">
                    </form>
                  </td>
                </tr>
                @endforeach
                @foreach($zaterdag as $uur)
                <tr>
                    <td>Zaterdag</td>
                  <td>{{$uur->StartUurVanDag}}</td>
                  <td>{{$uur->EindUurVanDag}}</td>
                  <td>
                    @if ($uur->Status == 0)Geen les 
                    @elseif ($uur->Status == 1)Vrije les 
                    @elseif ($uur->Status == 2)Genomen les 
                    @else Geen les 
                    @endif
                  </td>
                  <td>
                    <form action="StatusVeranderen" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$uur->id}}" hidden>
                        <input type="submit" name="Sub" value="Geen">
                        <input type="submit" name="Sub" value="Vrij">
                        <input type="submit" name="Sub" value="Genomen">
                    </form>
                  </td>
                </tr>
                @endforeach
                @foreach($zondag as $uur)
                <tr>
                    <td>Zondag</td>
                  <td>{{$uur->StartUurVanDag}}</td>
                  <td>{{$uur->EindUurVanDag}}</td>
                  <td>
                    @if ($uur->Status == 0)Geen les 
                    @elseif ($uur->Status == 1)Vrije les 
                    @elseif ($uur->Status == 2)Genomen les 
                    @else Geen les 
                    @endif
                  </td>
                  <td>
                    <form action="StatusVeranderen" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$uur->id}}" hidden>
                        <input type="submit" name="Sub" value="Geen">
                        <input type="submit" name="Sub" value="Vrij">
                        <input type="submit" name="Sub" value="Genomen">
                    </form>
                  </td>
                </tr>
                @endforeach
              </table>

        </div>
        <div class="side_section">
            <p>Dit is voor het goedkeuren</p>
            <table>
                <tr>
                  <th>Naam</th>
                  <th>Tekst</th>
                  <th>Goedkeuring</th>
                  <th>Veranderen</th>
                </tr>
                @foreach ($revieuw as $rev)
                <tr>
                  <td>{{$rev->Naam}}</td>
                  <td>{{$rev->Text}}</td>
                  <td>{{$rev->Goedkeuring}}</td>
                  <td>
                    <form action="GoedKeuren" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$rev->id}}" hidden>
                        <input type="submit" name="Sub" value="Goed">
                        <input type="submit" name="Sub" value="Fout">
                    </form>
                  </td>
                </tr>
                @endforeach
              </table>
        </div>
    </section>
@include('includes.Adminfooter')

