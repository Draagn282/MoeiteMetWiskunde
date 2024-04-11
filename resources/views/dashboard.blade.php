@include('includes.Adminheader')
    <section>
      <div class="Times">
              @foreach($days as $day => $hours)
              @dd($hours)
              <div class="Day" id="{{$day->Dag}}">
              <form method="POST" action="StatusVeranderen">
                @csrf
                @method('POST')
                <h2>{{$time->Dag}}</h2>
                <table class="table table-sm table no-border borderless">
                    <thead class="thead">
                        <tr>
                            <th>Id</th>
                            <th>Start Tijd</th>
                            <th>Eind Tijd</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($hours as $time)            

                          <tr>
                            <td><input type="text" class="form-control" value="{{$time->id}}" readonly></td>
                            <td><input type="text" class="form-control" name="Start_tijd[]" placeholder="Start tijd" value="{{$time->StartUurVanDag}}"></td>
                            <td><input type="text" class="form-control" name="Eind_tijd[]" placeholder="Start tijd" value="{{$time->EindUurVanDag}}"></td>
                              <td>
                                <select class="form-control" name="Status[]">
                                    <option value="0" {{ $time->Status == 0 ? 'selected' : '' }}>Genomen</option>
                                    <option value="1" {{ $time->Status == 1 ? 'selected' : '' }}>Vrij</option>
                                    <option value="2" {{ $time->Status == 2 ? 'selected' : '' }}>Niet Mogelijk</option>
                                </select>
                            </td>
                            </td>
                          </tr>
                          @endforeach

                    </tbody>
                </table>
                    </div>
                    <!-- Add any hidden fields or additional form inputs here -->
                    <button type="submit" class="btn btn-primary">@lang('global.submit')</button> <!-- Submit Button -->
                </div>
            </form>
            @endforeach
      </div>
    </section>
        
        {{-- <div class="side_section">
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
        </div> --}}
    </section>  
@include('includes.Adminfooter')

