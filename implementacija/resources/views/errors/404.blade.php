<?php
/**
 * View za prikazivanje stranice za grešku 404
 *
 * @author Natalija Mitić 0085/17
 *
 * @version 1.0
 */
?>

@extends('layouts.master')

@section('title')
Page not found
@endsection

@section('content')
<div id="pokedex">
    <h2 class="styleFont">Error 404</h2>
    <div class="loading noTopMargin">
        <img src="{{ URL::to('images/snorlax.gif')}}" alt="">
        <h2>Oops! A wild Snorlax blocks your way...</h2>
    </div>
</div>
@endsection