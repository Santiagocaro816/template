@foreach($cards as $card)
    <div class="playercard  fut22 card-large  nif  gold player-detail-card " style=" ">
    <span class="sheen"></span>
    <div class="playercard-rating">
        {{$card->avg}}
    </div>
    <div class="playercard-name">
        {{$card->name}}
    </div>
    <div class="playercard-position">
        {{$card->position}}
    </div>
    <div class="playercard-nation">

    </div>

    <div class="playercard-picture">
        <img height="135" width="135" alt="Arturo Vidal 81" src="{{$card->imgS}}" data-src="https://futhead.cursecdn.com/static/img/22/players/181872.png" class="loaded" data-was-processed="true">
    </div>
    <div class="playercard-chem playercard-chembot">
        <span class="fut22 icon icon-chem-"></span>
        <span class="chem-name"></span>
    </div>
    <div class="playercard-attr playercard-attr1">
        <span class="chembot-value">{{$card->speed}}</span> <span class="playercard-thin">SPE</span>
        <span class="chembot-delta" data-chembot-field="attr1" data-chembot-base="{{$card->speed}}"></span>
    </div>
    <div class="playercard-attr playercard-attr2">
        <span class="chembot-value">{{$card->shoot}}</span> <span class="playercard-thin">SHO</span>
        <span class="chembot-delta" data-chembot-field="attr2" data-chembot-base="{{$card->shoot}}"></span>
    </div>
    <div class="playercard-attr playercard-attr3">
        <span class="chembot-value">{{$card->strong}}</span> <span class="playercard-thin">STR</span>
        <span class="chembot-delta" data-chembot-field="attr3" data-chembot-base="79{{$card->strong}}"></span>
    </div>
    <div class="playercard-attr playercard-attr4">
        <span class="chembot-value">{{$card->skill}}</span> <span class="playercard-thin">SKI</span>
        <span class="chembot-delta" data-chembot-field="attr4" data-chembot-base="{{$card->skill}}"></span>
    </div>
    <div class="playercard-attr playercard-attr5">
        <span class="chembot-value">{{$card->defending}}</span> <span class="playercard-thin">DEF</span>
        <span class="chembot-delta" data-chembot-field="attr5" data-chembot-base="{{$card->defending}}"></span>
    </div>
    <div class="playercard-attr playercard-attr6">
        <span class="chembot-value">{{$card->endurance}}</span> <span class="playercard-thin">PHY</span>
        <span class="chembot-delta" data-chembot-field="attr6" data-chembot-base="{{$card->endurance}}"></span>
    </div>
@endforeach
