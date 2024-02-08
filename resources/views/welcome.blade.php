@include('includes.header')
<div class="Home_image">
    <section class="section_Home">
        <div class="middle_section">
            <div class="lander_div">
                <p>"Ik heb</p>
                <h1 class="Lander_text1">Moeite Met Wiskunde"</h1>
                <p>,Nou daar kan ik mee helpen</p>
                <div>
                    <a href="#Planning"><button>Boek nu</button></a>
                    <a href="#Contact"><button>Heb je een vraag?</button></a>
                    <a href="#Informatie"><button>Kom meer te weten</button></a>
                </div>
            </div>
        </div>
    </section>
</div>
<section id="Informatie">
    <div class="side_section">
        <div class="Linfo_div">
            <h1>Lorem ipsum dolor sit amet.!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laborum iure perferendis sed totam quidem veniam, ipsam distinctio iste eum dicta culpa quibusdam consectetur tenetur laboriosam doloribus eius architecto! Aspernatur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, vitae amet, cum modi voluptatem eveniet quaerat minima quae dolorem quasi soluta voluptates quibusdam minus eius vero cumque voluptatum, inventore atque error delectus temporibus corrupti velit! Saepe quo non amet atque illo id officia laudantium, doloremque voluptatum suscipit aperiam laborum libero tempore? Vitae consequuntur, laborum quidem adipisci nisi numquam esse suscipit.</p>   
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nam, nihil ullam ducimus reiciendis aliquam magnam. Molestiae minus ipsum id?</p>
            </div>
        </div>
    </div>
    <div class="third_section">
        <div class="info_div" id="Tijden">
            <div class="info_img">
                <h1>Tijden</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique quas dicta aliquam consectetur doloremque exercitationem est suscipit hic recusandae animi voluptatem ipsa sint, aut magni quaerat laboriosam corporis. Repudiandae, debitis.</p>
            </div>            
        </div>            
    </div>
    <div class="third_section">
        <div class="info_div" id="Niveau">
            <div class="info_img">
                <h1>Niveau</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi minima possimus repellendus explicabo provident, inventore consectetur rem nisi fugiat culpa molestiae numquam architecto earum atque facilis nihil dolore totam ut. Deserunt sit hic fuga a laudantium quo ut ipsam eligendi distinctio. Recusandae magni amet error veniam totam similique saepe quibusdam eaque, a ab, perferendis dolore cum illo non ducimus iste. Asperiores commodi ut quis ullam quas labore possimus minus distinctio.</p>    
            </div>            
        </div>            
    </div>
</section>
<section class="section_middle" id="Planning">
    <div class="middle_section">
        <div class="calendar">
            <div class="cheader"><p>Week planning</p></div>
                <div class="cbody">
                    <div class="cday">
                        <h1>Maandag</h1>
                        @foreach ($maandag as $dag1)
                        <div class="time @if ($dag1->Status == 0)dayNoday @elseif ($dag1->Status == 1)dayFree @elseif ($dag1->Status == 2)dayTakken @else dayNoday @endif">
                        <ul>
                            <li>{{$dag1->StartUurVanDag}}</li>
                            <li>{{$dag1->EindUurVanDag}}</li>
                        </ul>
                        </div>
                        @endforeach 
                    </div>
                    <div class="cday">
                        <h1>Dinsdag</h1>
                        @foreach ($dinsdag as $dag2)
                        <div class="time @if ($dag2->Status == 0)dayNoday @elseif ($dag2->Status == 1)dayFree @elseif ($dag2->Status == 2)dayTakken @else dayNoday @endif">
                        <ul>
                            <li>{{$dag2->StartUurVanDag}}</li>
                            <li>{{$dag2->EindUurVanDag}}</li>
                        </ul>
                        </div>
                        @endforeach 
                    </div>
                    <div class="cday">
                        <h1>Woensdag</h1>
                        @foreach ($woensdag as $dag3)
                        <div class="time @if ($dag3->Status == 0)dayNoday @elseif ($dag3->Status == 1)dayFree @elseif ($dag3->Status == 2)dayTakken @else dayNoday @endif">
                        <ul>
                            <li>{{$dag3->StartUurVanDag}}</li>
                            <li>{{$dag3->EindUurVanDag}}</li>
                        </ul>
                        </div>
                        @endforeach 
                    </div>
                    <div class="cday">
                        <h1>Donderdag</h1>
                        @foreach ($donderdag as $dag4)
                        <div class="time @if ($dag4->Status == 0)dayNoday @elseif ($dag4->Status == 1)dayFree @elseif ($dag4->Status == 2)dayTakken @else dayNoday @endif">
                        <ul>
                            <li>{{$dag4->StartUurVanDag}}</li>
                            <li>{{$dag4->EindUurVanDag}}</li>
                        </ul>
                        </div>
                        @endforeach  
                    </div>
                    <div class="cday">
                        <h1>Vrijdag</h1>
                        @foreach ($vrijdag as $dag5)
                        <div class="time @if ($dag5->Status == 0)dayNoday @elseif ($dag5->Status == 1)dayFree @elseif ($dag5->Status == 2)dayTakken @else dayNoday @endif">
                        <ul>
                            <li>{{$dag5->StartUurVanDag}}</li>
                            <li>{{$dag5->EindUurVanDag}}</li>
                        </ul>
                        </div>
                        @endforeach  
                    </div>
                    <div class="cday">
                        <h1>Zaterdag</h1>
                        @foreach ($zaterdag as $dag6)
                        <div class="time @if ($dag6->Status == 0)dayNoday @elseif ($dag6->Status == 1)dayFree @elseif ($dag6->Status == 2)dayTakken @else dayNoday @endif">
                        <ul>
                            <li>{{$dag6->StartUurVanDag}}</li>
                            <li>{{$dag6->EindUurVanDag}}</li>
                        </ul>
                        </div>
                        @endforeach 
                    </div>
                    <div class="cday">
                        <h1>Zondag</h1>
                        @foreach ($zondag as $dag7)
                        <div class="time @if ($dag7->Status == 0)dayNoday @elseif ($dag7->Status == 1)dayFree @elseif ($dag7->Status == 2)dayTakken @else dayNoday @endif">
                        <ul>
                            <li>{{$dag7->StartUurVanDag}}</li>
                            <li>{{$dag7->EindUurVanDag}}</li>
                        </ul>
                        </div>
                        @endforeach  
                    </div>
                </div>
                <div class="cfooter">
                    <p>genomen</p>
                    <div class="dayTakken"></div>
                    <p>vrij</p>
                    <div class="dayFree"></div>
                    <p>Niet mogelijk</p>
                    <div class="dayNoday"></div>
                </div>
            </div>   
        </div>
    </div>
</section>
<section class="section_middle" id="Recenties">
    <div class="middle_section">
        <div class="rev_section">
            <div class="rev_body">
                @foreach ($revieuw as $rev)
                <div class="rev"><p>{{$rev->Naam}}</p><p>{{$rev->Text}}</p></div>
                @endforeach
        </div>
        <div class="rev_write">
            <h1>Schrijf een revieuw!</h1>
            <p>Als je leuke ervarignen hebt met vincent Kan je die hier opschijven!<p>
            <form action="./RevForm" method="POST">
                @csrf
                <label for="Name">Naam</label>
                <input type="text" name="Name" id="Name">
                <label for="Name">Text</label>
                <textarea name="Quote" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="Opsturen!">
            </form>
        </div>
        </div>
       
    </div>
</section>
<section id="Contact">
    <div class="two_third_section">
        <div class="contact_email">
            <form  method="POST" action="./sendMail">
                @csrf
                <h1>Contact</h1>
                <p>Als je een vraag hebt of als een les wil plannen kan je hier een mail sturen</p>
                <div class="form_small">
                    <label for="name">Naam</label>
                    <input type="text" value="" id="Name" name="Name">
                    <label for="email">Email</label>
                    <input type="email" name="Email" id="Email">
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
