<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Journal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/js/app.js'])
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
		<a class="navbar-brand" href="#">JOURNAL</a>
	</nav>

	<div class="container-fluid">
		<div class="row justify-content-center mt-3">
			<div class="col-md-9 col-lg-10 rounded shadow-lg bg-secondary">
                <div class="mx-3 my-3">
                    <div class="alert alert-primary" role="alert">
                        Life
                    </div>
                    
                    
                    <div class="accordion accordion-flush rounded">
                        <div class="accordion-item rounded mb-3" x-data="{open:false}">
                            <h2 class="accordion-header">
                            <button x-on:click="open = ! open" class="accordion-button collapsed" type="button" aria-expanded="false" aria-controls="flush-collapseOne">
                                The Beginning
                            </button>
                            </h2>
                            
                            <div x-show="open" class="accordion-body">Growing up with a lot of things makes people toughen up to survive, that’s when i found games. 
                                I am finally close to a peace, however in every journey the ups and downs is a must, 
                                otherwise it’s not life worth living just like if it takes looks and kind to be happy then the word misery wouldn’t exists. 
                                I was going competitively in esport scenes, my life was on track, I was the rising star, young talents, golden boy, you named it. 
                                My role was to be a support player and maintain the positivity atmosphere of the team. It’s hard. Very hard. When it comes to mistakes and small fights. 
                                I need to be in the middle of it, to neutralise the situation. I was the negativity fodder on the team which at first I’m okay with it. 
                                I need to keep the composure of not only my mental but also my team. As time flies deep inside I was hurting. Not only from the role. 
                                People often said it takes a great sacrifice to pursue your dreams, for me it was time, family and friends. 
                                I lost much of my times to be with them. There is this one day I will remember forever until I die, I was sleeping because I had a practice that last until 3 am. 
                                When I was sleeping I got a call from Tok Ayah my grandpa, I decided to not take the call and sleep. Then after I wakeup I realised he’d been calling to ask for help, he fell. 
                                A couple of days later he went into a paralysing state where he cannot move and talk. That call was supposed to be the last time I heard his voice calling my name. 
                                I cannot remember when was the last time he use his voice to call me. It’s heartbreaking to see everything in your life going away.
                            </div>
                            
                        </div>
                        <div class="accordion-item rounded mb-3" x-data="{open:false}">
                            <h2 class="accordion-header">
                            <button x-on:click="open = ! open" class="accordion-button collapsed" type="button" aria-expanded="false" aria-controls="flush-collapseOne">
                                Friends
                            </button>
                            </h2>
                            
                            <div class="accordion-body" x-show="open">
                                <p>Life must continue. Tak kisah apa rintangan kena hadapi. Kadang2 sering terlihat sepi melihat kawan-kawan bahagia dengan cinta sejoli. But I do understand, everyone have their own journey to go through and they also have their own tests to live up to. Kita tak sama. Happy to see all of my friends are doing well and happy, sering juga menghantar selfie bersama tercinta mereka. </p>

                                <p>Sometimes they flex their girl on me. Usually I just laugh it off and pretending to shush them away.</p>
                                <p>Now I always respond by saying “Takpe, Aku tumpang gembira dengan korang” and they would laugh it off.</p>
                                
                                <p>They didn’t see that I’m crying inside.</p>

                                <p>Sometimes I do feel sad because I want to feel happy too. I know I deserved to be happy, everyone is! but the question is when. I’ve tried looking for “the one” time to time, but what can we do, they are just there to build our character. Is it because I’m picky? That’s not for me to say. Of course we always want the best for us. It’s hard these days to find someone that you called as “my dream girl”.</p>
                                <p>I always have feelings for smart girls, like come on, what is more sexy than their mind no? Hahahahaha. But what good is smart if they cannot converse well with us or not matured in every aspects. I find that hard to dealt with. I scared of girls sometimes by saying I’m the type of person that is looking for long commitments. I’m sorry I can’t help it, I date to marry not to satisfy my needs or my boredness. Maybe im in the wrong circle.</p>
                                
                                <p>Need to find someone to put the ring on before 30 tho hmm 🤔</p>

                            </div>
                            
                        </div>
                        <div class="accordion-item rounded mb-3" x-data="{open:false}">
                            <h2 class="accordion-header">
                            <button x-on:click="open = ! open" class="accordion-button collapsed" type="button" aria-expanded="false" aria-controls="flush-collapseOne">
                                Lonely
                            </button>
                            </h2>
                            
                            <div class="accordion-body" x-show="open">
                                <p>I always has been a good listeners and advisor to my friends, whether it’s love life, personal problems, depression. I was their go to whenever all kind of things happened. I guess it’s destiny to always be that one person who people came to seek for help and then vanished to never be seen again. No matter how hard I’m trying to run from that responsibility somehow someway it will wait for me at the end of the tunnels. I had to endured all the negativity again just like back in the esport scenes. I pampered myself by saying “it’s okay, they need you”. Of course I don’t mind helping people by giving advice or listening to them. But part of me felt different, unfathomable to be explain. It’s not dead, it need help, because in the end I am still an emotional human that need support. Is this really it? Does the cycle gonna run through this infinitely? Right now I’m just a person try to make by, survive. Some of my close friends do sometimes ask, “are you okay?”.</p>
                                <p>I wouldn’t want them to worry, so I had to lie and said yes. And they often said, “takpe kau kan kuat”.</p>
                            
                                <p>Dalam hati sering berbicara.</p>

                                <p>“Kuat?</p>

                                <p>Barangkali mereka lupa saya juga manusia yang pandai memendam.</p>

                                <p>Semua sakit.</p>
                                <p>Tak ada siapa yang tahu.</p>

                                <p>Yang dipamerkan tak sama dengan yang dibelakang tabir senyumanku.</p>

                                <p>Itulah watak yang berjaya saya lakonkan.”</p>

                                <p>I tried so hard to help other people because I have no idea how to help myself.</p>

                                <p>Little did they know, I’m tired.</p>

                                <p>Tired.</p>
                            </div>
                            
                        </div>
                    </div>



                    <div class="alert alert-primary mt-5" role="alert">
                        Confession
                    </div>

                    <div x-data="{password:''}">
                        <div class="row" x-data="{hint:false}">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Password</span>
                                    <input type="text" class="form-control" placeholder="dd/mm" x-model="password">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button x-on:click="hint = ! hint" class="input-group btn btn-primary">Hint</button>
                            </div>
                            
                            <div x-show="hint" class="col-md-5">
                                <button class="form-control disabled text-dark">Birthdate Of Someone Special. Could be anyone! We never know. Could be you too.</button>
                            </div>
                            
                        </div>
                        
                        <template x-if="password == '06/08'">
                            <div class="accordion accordion-flush rounded">
                                <div class="accordion-item rounded mb-3" x-data="{open:false}">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                    <button x-on:click="open = ! open" class="accordion-button collapsed" type="button" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Sunflower
                                    </button>
                                    </h2>
                                    
                                    <div class="accordion-body" x-show="open">
                                        <p>Her. This is about this one girl that I have talk/greet in December 17th and met in February 2nd. At first we were just friends. I don’t really have feelings for her. But as time went by. I don’t know how to describe it. She dazzled me in every way. Smart girl that are kind hearted, understanding and matured. She had me head over heels. I remember the first time I met her, the first thing I noticed is her beautiful eyes, mesmerising, I'm in awe and speechless. There’s something odd about it, her eyes and mere presence makes me calm and relaxed. I have not felt this way in a long time, perhaps 10 years? She is well dressed in that purple kebarung / kurung I think? Tak tau la nama2 dress ni😭😭😭. She is beautiful as roses, cute as daisies, her smile? Oh my, I’d give everything just to see her smile. It’s weird to be honest, I rarely talk to her but I always smile and happy if I saw her notifications.</p>

                                        <p>I know it’s weird to say this but.</p>

                                        <p>I’d choose you;</p> 
                                        <p>In a hundred lifetimes,</p>
                                        <p>In a hundred worlds,</p>
                                        <p>In any version of reality,</p>
                                        <p>I’d find you and I’d choose you.</p>

                                        <p>She have a way of making even the most mundane moments special just by existing. Maybe she’s the one? It’s too soon to tell.</p>

                                        <p>I also don’t think she had any interest in me. The reason is I don’t know. Maybe because im younger? Maybe im talkative? Maybe she doesn’t trust me? Maybe im not her type? Maybe im just not it.
                                        Who knows.</p> 

                                        <p>Maybe she doesn’t even see me. Don’t you think it’s weird that how many version of you exist in peoples mind?</p>

                                        <p>Some know you as a shy person that doesn’t talk,</p> 
                                        <p>Some see you as the annoying person that wont shut up,</p>
                                        <p>Some see you cold and mean,</p>
                                        <p>Some find you caring and calm.</p>

                                        <p>I wonder what does she sees in me.</p>

                                        <p>I hate this feelings where you miss them but you are unable to do anything, because they are not yours and who are we to demand attentions from them. We have to respect their times and boundaries.</p>

                                        <p>I miss her on every living second of my life.</p>

                                        <p>Rindu.</p>

                                        <p>Rindu tak diciptakan oleh jarak,</p> 
                                        <p>Namun oleh perasaan.</p>

                                        <p>Saya merindukan dia bukan kerana kebosanan.</p>

                                        <p>Namun kerana awak, </p>

                                        <p>Telah ada didalam hatiku.</p>

                                        <p>I wonder what am I in her eyes.</p>

                                        <p>She without doubt is my highlight of the year.</p>

                                        <p>Hoping her name is written for me 50 thousand years ago before the sky was introduced to the sea. Luh Mahfuz.</p>

                                        <p>If you managed to read this, I'd like you to know that my life slowly on track because of you.</p>
                                        <p>I didn't expect to fall for you, but that is how life works, we sometimes fall for people that we are least expected.</p>
                                    </div>
                                    
                                    
                                </div>
                            </div>  
                        </template>
                    </div>
                    
                </div>
			</div>
		</div>
	</div>
    </body>
</html>
