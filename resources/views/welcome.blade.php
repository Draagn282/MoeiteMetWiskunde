@include('includes.header')
<div class="Home_image">
    <section id="Thuis"class="section_Home">
        <div class="middle_section">
            <div class="lander_div">
                <p>"Ik heb</p>
                <h1 class="Lander_text1">Moeite Met Wiskunde"</h1>
                <p>Nou daar kan ik mee helpen</p>
                <div>
                    <a href="#Planning"><button>Boek nu</button></a>
                    <a href="#Informatie"><button>Kom meer te weten</button></a>
                    <a href="#Contact"><button>Heb je een vraag?</button></a>
                </div>
            </div>
        </div>
    </section>
</div>
<section id="Informatie">
    <div class="two_third_section flex_middle">
        <div class="Linfo_div">
            <h1>Lorem ipsum dolor sit amet.!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laborum iure perferendis sed totam quidem veniam, ipsam distinctio iste eum dicta culpa quibusdam consectetur tenetur laboriosam doloribus eius architecto! Aspernatur!</p>   
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laborum iure perferendis sed totam quidem veniam, ipsam distinctio iste eum dicta culpa quibusdam consectetur tenetur laboriosam doloribus eius architecto! Aspernatur!e halen, de echte waarde is het overzien van de stof en het zelf nadenken. Maar uiteraard zijn studenten die alleen efficiënt examens willen halen ook helemaal welkom. Ik zie je graag verschijnen!.</p>
        </div>
    </div>
    <div class=" flex_middle third_section ">
        <div class="img_cent ">
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
                            <div class="time @if ($dag1->Status == 0) dayNoday @elseif ($dag1->Status == 1) dayFree @elseif ($dag1->Status == 2) dayTakken @else dayNoday @endif">
                                <ul>
                                    <li>{{ \Carbon\Carbon::parse($dag1->StartUurVanDag)->format('H:i') }}</li>
                                    <li>-</li>
                                    <li>{{ \Carbon\Carbon::parse($dag1->EindUurVanDag)->format('H:i') }}</li>
                                </ul>
                            </div>
                        @endforeach 
                    </div>
                    <div class="cday">
                        <h1>Dinsdag</h1>
                        @foreach ($dinsdag as $dag2)
                            <div class="time @if ($dag2->Status == 0) dayNoday @elseif ($dag2->Status == 1) dayFree @elseif ($dag2->Status == 2) dayTakken @else dayNoday @endif">
                                <ul>
                                    <li>{{ \Carbon\Carbon::parse($dag2->StartUurVanDag)->format('H:i') }}</li>
                                    <li>-</li>
                                    <li>{{ \Carbon\Carbon::parse($dag2->EindUurVanDag)->format('H:i') }}</li>
                                </ul>
                            </div>
                        @endforeach 
                    </div>
                    
                    <div class="cday">
                        <h1>Woensdag</h1>
                        @foreach ($woensdag as $dag3)
                            <div class="time @if ($dag3->Status == 0) dayNoday @elseif ($dag3->Status == 1) dayFree @elseif ($dag3->Status == 2) dayTakken @else dayNoday @endif">
                                <ul>
                                    <li>{{ \Carbon\Carbon::parse($dag3->StartUurVanDag)->format('H:i') }}</li>
                                    <li>-</li>
                                    <li>{{ \Carbon\Carbon::parse($dag3->EindUurVanDag)->format('H:i') }}</li>
                                </ul>
                            </div>
                        @endforeach 
                    </div>
                    
                    <div class="cday">
                        <h1>Donderdag</h1>
                        @foreach ($donderdag as $dag4)
                            <div class="time @if ($dag4->Status == 0) dayNoday @elseif ($dag4->Status == 1) dayFree @elseif ($dag4->Status == 2) dayTakken @else dayNoday @endif">
                                <ul>
                                    <li>{{ \Carbon\Carbon::parse($dag4->StartUurVanDag)->format('H:i') }}</li>
                                    <li>-</li>
                                    <li>{{ \Carbon\Carbon::parse($dag4->EindUurVanDag)->format('H:i') }}</li>
                                </ul>
                            </div>
                        @endforeach 
                    </div>
                    
                    <div class="cday">
                        <h1>Vrijdag</h1>
                        @foreach ($vrijdag as $dag5)
                            <div class="time @if ($dag5->Status == 0) dayNoday @elseif ($dag5->Status == 1) dayFree @elseif ($dag5->Status == 2) dayTakken @else dayNoday @endif">
                                <ul>
                                    <li>{{ \Carbon\Carbon::parse($dag5->StartUurVanDag)->format('H:i') }}</li>
                                    <li>-</li>
                                    <li>{{ \Carbon\Carbon::parse($dag5->EindUurVanDag)->format('H:i') }}</li>
                                </ul>
                            </div>
                        @endforeach 
                    </div>
                    
                    <div class="cday">
                        <h1>Zaterdag</h1>
                        @foreach ($zaterdag as $dag6)
                            <div class="time @if ($dag6->Status == 0) dayNoday @elseif ($dag6->Status == 1) dayFree @elseif ($dag6->Status == 2) dayTakken @else dayNoday @endif">
                                <ul>
                                    <li>{{ \Carbon\Carbon::parse($dag6->StartUurVanDag)->format('H:i') }}</li>
                                    <li>-</li>
                                    <li>{{ \Carbon\Carbon::parse($dag6->EindUurVanDag)->format('H:i') }}</li>
                                </ul>
                            </div>
                        @endforeach 
                    </div>
                    <div class="cday">
                        <h1>Zondag</h1>
                        @foreach ($zondag as $dag7)
                            <div class="time @if ($dag7->Status == 0) dayNoday @elseif ($dag7->Status == 1) dayFree @elseif ($dag7->Status == 2) dayTakken @else dayNoday @endif">
                                <ul>
                                    <li>{{ \Carbon\Carbon::parse($dag7->StartUurVanDag)->format('H:i') }}</li>
                                    <li>-</li>
                                    <li>{{ \Carbon\Carbon::parse($dag7->EindUurVanDag)->format('H:i') }}</li>
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
    <div class="middle_section flex-center">
        <div class="rev_section">
            <div class="rev_body">
                <div class="revieuw">
                    <h3>Daan</h3><p>Hi ik ben daan vincent is cool.</p>
                </div>
                <div class="revieuw">
                    <h3>Daan</h3><p>Hi ik ben daan vincent is cool.</p>
                </div><div class="revieuw">
                    <h3>Daan</h3><p>Hi ik ben daan vincent is cool.</p>
                </div><div class="revieuw">
                    <h3>Daan</h3><p>Hi ik ben daan vincent is cool.</p>
                </div><div class="revieuw">
                    <h3>Daan</h3><p>Hi ik ben daan vincent is cool.</p>
                </div><div class="revieuw">
                    <h3>Daan</h3><p>Hi ik ben daan vincent is cool.</p>
                </div>
                @foreach ($revieuw as $rev)
                <div class="revieuw">
                    <div class="rev"><p>{{$rev->Naam}}</p><p>{{$rev->Text}}</p></div>
                </div>
                @endforeach
        </div>
        <div class="rev_write">
            <form action="./RevForm" method="POST">
                @csrf
                <div>
                    <h1>Schrijf een revieuw</h1>
                    <p>Als je leuke ervarignen hebt met vincent Kan je die hier opschijven<p>
    
                </div>
                <div>
                    <label for="Name">Naam</label>
                    <input type="text" name="Name" id="Name">
                </div>
                <div>
                    <label for="Quote">Text</label>
                    <textarea name="Quote" id="Quote" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Opsturen!">
            </form>
        </div>
        </div>
       
    </div>
</section>
<section class="flex_middle" id="Contact">
    <div class="two_third_section flex_middle">
        <div class="contact_email">
            <form  method="POST" action="./sendMail">
                @csrf
                <div>
                    <h1>Contact</h1>
                    <p>Als je een vraag hebt of als een les wil plannen kan je hier een mail sturen</p>
                </div>
                    <div class="form_small">
                    <div>
                        <label for="name">Naam</label>
                        <input type="text" value="" id="Name" name="Name">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="Email" id="Email">
                    </div>
                </div>
                <div class="form_large">
                    <label for="text">Text</label>
                    <textarea name="Text" id="Text"  placeholder="Voer hier je text in..."></textarea>
                </div>
                <div>
                    <input type="submit" value="Verzenden">
                </div>
            </form>
        </div>
    </div>
    <div class="third_section flex_middle">        
        <div class="contact_links">
            <div>
                <h1>Socials</h1>
                <p>Hier kan je mij vinden:</p>
            </div>
            <ul>
                <li>
                    <a HREF="mailto:vincetn@provider.nl"><ion-icon name="mail-outline"></ion-icon>:  vincent@gmail.com</a>
                </li>
                <li>
                    <a HREF="mailto:vincetn@provider.nl"><ion-icon name="call-outline"></ion-icon>:  +0688473625</a>
                </li>
                <li>
                    <a HREF="mailto:vincetn@provider.nl"><ion-icon name="logo-discord"></ion-icon>:  vincent@gmail.com</a>
                </li>
                <li>
                    <a HREF="mailto:vincetn@provider.nl"><ion-icon name="mail-outline"></ion-icon>:  vincent@gmail.com</a>
                </li>
            </ul>
        </div>
    </div>
</section>
@include('includes.footer')
