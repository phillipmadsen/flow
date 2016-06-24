@extends('layouts.app')

@section('content')

  {!! Joanvt\MediaManager\MediaManager::styles() !!}

  {!!  Joanvt\MediaManager\MediaManager::lists(Media::where('status','A')->orderBy('id','DESC'))  !!}

  {!! Joanvt\MediaManager\MediaManager::scripts() !!}
    
@endsection
