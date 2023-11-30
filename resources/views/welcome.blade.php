@include('includes.header')
        <div class="Home_image">
            <section id="Thuis"class="section_Home">
                <div class="middle_section">
                    <div class="lander_div">
                        <p>"Ik heb</p>
                        <h1 class="Lander_text1">Moeite Met Wiskunde"</h1>
                        <p>,Nou daar kan ik mee helpen</p>
                    </div>
                </div>
               </section>
        </div>

       <section id="Informatie">
            <div class="side_section">
                <div class="Linfo_div">
                    <h1>Lorem ipsum dolor sit amet.!</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laborum iure perferendis sed totam quidem veniam, ipsam distinctio iste eum dicta culpa quibusdam consectetur tenetur laboriosam doloribus eius architecto! Aspernatur!</p>   
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laborum iure perferendis sed totam quidem veniam, ipsam distinctio iste eum dicta culpa quibusdam consectetur tenetur laboriosam doloribus eius architecto! Aspernatur!e halen, de echte waarde is het overzien van de stof en het zelf nadenken. Maar uiteraard zijn studenten die alleen efficiënt examens willen halen ook helemaal welkom. Ik zie je graag verschijnen!.</p>
                </div>
            </div>
            <div class="side_section">
                <div class="img_cent">
                    <img src="{{ asset('../resources/img/HeadShotSide.jpg') }}" alt="">                
                </div>
            </div>      
       </section>
       <section>
        <div class="third_section">
            <div class="info_div" id="Locatie">
                <div class="info_img">
                    <h1>locatie</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi minima possimus repellendus explicabo provident, inventore consectetur rem nisi fugiat culpa molestiae numquam architecto earum atque facilis nihil dolore totam ut. Deserunt sit hic fuga a laudantium quo ut ipsam eligendi distinctio. Recusandae magni amet error veniam totam similique saepe quibusdam eaque, a ab, perferendis dolore cum illo non ducimus iste. Asperiores commodi ut quis ullam quas labore possimus minus distinctio.</p>    
                </div>
            </div>
        </div>
        <div class="third_section">
            <div class="info_div" id="Tijden">
                <div class="info_img">
                    <h1>Tijden</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi minima possimus repellendus explicabo provident, inventore consectetur rem nisi fugiat culpa molestiae numquam architecto earum atque facilis nihil dolore totam ut. Deserunt sit hic fuga a laudantium quo ut ipsam eligendi distinctio. Recusandae magni amet error veniam totam similique saepe quibusdam eaque, a ab, perferendis dolore cum illo non ducimus iste. Asperiores commodi ut quis ullam quas labore possimus minus distinctio.</p>    
                </div>            </div>            
        </div>
        <div class="third_section">
            <div class="info_div" id="Niveau">
                <div class="info_img">
                    <h1>Niveau</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi minima possimus repellendus explicabo provident, inventore consectetur rem nisi fugiat culpa molestiae numquam architecto earum atque facilis nihil dolore totam ut. Deserunt sit hic fuga a laudantium quo ut ipsam eligendi distinctio. Recusandae magni amet error veniam totam similique saepe quibusdam eaque, a ab, perferendis dolore cum illo non ducimus iste. Asperiores commodi ut quis ullam quas labore possimus minus distinctio.</p>    
                </div>            </div>            
        </div>
   </section>
       <div class="section_middle" id="Planning">
        <div class="middle_section">
            <div class="back_calendar">
                <div class="calendar">
                    <div class="calendar_day">
                        <div class="cheader"><p>DAG </p></div>
                        <div class="cday_body">
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
                            @foreach ($Plan as $Planning)
                            <ul>
                                <li>{{$Planning->LeerlingId}}</li>
                                <li>{{$Planning->LesId}}</li>
                                <hr>
                            </ul>
                            @endforeach 
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
                            <div class="cweek">
                                <div class="cday"><label>Monday</label><h1>11</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>12</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>13</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>14</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>15</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>16</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>17</h1><label>Maand</label></div>
                            </div>
                            <div class="cweek">
                                <div class="cday"><label>Monday</label><h1>18</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>19</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>12</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>14</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>11</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>15</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>41</h1><label>Maand</label></div>
                            </div>
                            <div class="cweek">
                                <div class="cday"><label>Monday</label><h1>23</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>23</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>23</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>25</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>28</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>29</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>20</h1><label>Maand</label></div>
                            </div>
                            <div class="cweek">
                                <div class="cday"><label>Monday</label><h1>31</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>32</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>33</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>34</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>35</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>36</h1><label>Maand</label></div>
                                <div class="cday"><label>Monday</label><h1>37</h1><label>Maand</label></div>
                            </div>
                        </div>
                        <div class="cfooter">
                            <p>genomen</p>
                            <p>vrij</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
       </div>
       <section id="Contact">
            <div class="two_third_section">
                <div class="contact_email">
                    <form  method="POST" action="/profile">
                        @csrf
                        <div class="form_small">
                            <label for="name">Naam</label>
                            <input type="text" value="" id="name" name="name">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="form_large">
                            <label for="text">Text</label>
                            <textarea name="Text" id="Text"  placeholder="Voer hier je text in..."></textarea>
                        </div>
                        <div class="form_small">
                            <input type="submit" value="Verzenden">
                        </div>
                    </form>
                </div>
            </div>
            <div class="third_section">
                <div class="contact_links">
                    <ul>
                        <li>
                            <button><A HREF="mailto:vincetn@provider.nl"><ion-icon name="mail-outline"></ion-icon></a></button>
                            <p>vincent@gmail.com</p>
                        </li>
                        <li>
                            <button><a href=""> <ion-icon name="call-outline"></ion-icon></a></button>
                            <p>06453935009</p>
                        </li>
                        <li>
                            <button><A HREF="mailto:vincetn@provider.nl"><ion-icon name="mail-outline"></ion-icon></a></button>
                            <p>daan@gmail.com</p>
                        </li>
                        <li>
                            <button><a href=""> <ion-icon name="call-outline"></ion-icon></a></button>
                            <p>06923401859</p>
                        </li>
                    </ul>
                </div>
            </div>
       </section>
@include('includes.footer')
