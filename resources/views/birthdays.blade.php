<div class="content">
    @foreach($birthdays as $birthday)
        <h2>{{$birthday->first_name}}</h2>
        <h6>{{ $birthday->birthday }}</h6>
    @endforeach
</div><?php
