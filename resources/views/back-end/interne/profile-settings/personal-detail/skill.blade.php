<div class="wt-tabscontenttitle">
    <h2>Specialization</h2>
</div>
<div class="form-group">

{!! Form::text( 'specialization', e(Auth::user()->profile->specialization), ['class' =>'form-control', 'placeholder' => 'Specialization'] ) !!}

</div>


<div class="wt-tabscontenttitle">
    <h2>University</h2>
</div>
<div class="form-group">

{!! Form::text( 'university', e(Auth::user()->profile->university), ['class' =>'form-control', 'placeholder' => 'University'] ) !!}

</div>


<div class="wt-tabscontenttitle">
    <h2>Grade</h2>
</div>
<div class="form-group">

{!! Form::text( 'grade', e(Auth::user()->profile->grade), ['class' =>'form-control', 'placeholder' => 'Grade'] ) !!}

</div>