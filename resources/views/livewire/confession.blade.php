<div>
<div class="row">
    <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text">Password</span>
            <input wire:model.debounce.500ms="password" type="text" class="form-control" placeholder="dd/mm">
        </div>
    </div>
    <div class="col-md-1">
        <button wire:click="openHint" class="input-group btn btn-primary">Hint</button>
    </div>
    @if($hint)
        <div class="col-md-5">
            <button class="form-control disabled text-dark">Birthdate Of Someone Special. Could be anyone! We never know. Could be you too.</button>
        </div>
    @endif
</div>
@if($open)
<div class="accordion accordion-flush rounded">
    <div class="accordion-item rounded mb-3">
        <h2 class="accordion-header" id="flush-headingOne">
        <button wire:click="openLetter" class="accordion-button collapsed" type="button" aria-expanded="false" aria-controls="flush-collapseOne">
            Sunflower
        </button>
        </h2>
        @if($letter)
        <div class="accordion-body">
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
        @endif
        
    </div>
</div>
@endif
<div class="col-md-2">
    <button wire:click="submit" class="input-group btn btn-primary">Submit Password</button>
</div>
</div>