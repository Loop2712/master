<div class="form-group {{ $errors->has('id_sub') ? 'has-error' : ''}}">
    <label for="id_sub" class="control-label">{{ 'Id Sub' }}</label>
    <input class="form-control" name="id_sub" type="text" id="id_sub" value="{{ isset($subject->id_sub) ? $subject->id_sub : ''}}" >
    {!! $errors->first('id_sub', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sub_name') ? 'has-error' : ''}}">
    <label for="sub_name" class="control-label">{{ 'Sub Name' }}</label>
    <input class="form-control" name="sub_name" type="text" id="sub_name" value="{{ isset($subject->sub_name) ? $subject->sub_name : ''}}" >
    {!! $errors->first('sub_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('professor') ? 'has-error' : ''}}">
    <label for="professor" class="control-label">{{ 'Professor' }}</label>
    <input class="form-control" name="professor" type="number" id="professor" value="{{ isset($subject->professor) ? $subject->professor : ''}}" >
    {!! $errors->first('professor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day') ? 'has-error' : ''}}">
    <label for="day" class="control-label">{{ 'Day' }}</label>
    <select name="day" class="form-control" id="day" >
    @foreach (json_decode('{"sunday":"sunday","monday":"monday","3":"3","4":"4","5":"5","6":"6"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($subject->day) && $subject->day == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('day', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time_start') ? 'has-error' : ''}}">
    <label for="time_start" class="control-label">{{ 'Time Start' }}</label>
    <input class="form-control" name="time_start" type="time" id="time_start" value="{{ isset($subject->time_start) ? $subject->time_start : ''}}" >
    {!! $errors->first('time_start', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time_end') ? 'has-error' : ''}}">
    <label for="time_end" class="control-label">{{ 'Time End' }}</label>
    <input class="form-control" name="time_end" type="time" id="time_end" value="{{ isset($subject->time_end) ? $subject->time_end : ''}}" >
    {!! $errors->first('time_end', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sub_room_id') ? 'has-error' : ''}}">
    <label for="sub_room_id" class="control-label">{{ 'Sub Room Id' }}</label>
    <input class="form-control" name="sub_room_id" type="number" id="sub_room_id" value="{{ isset($subject->sub_room_id) ? $subject->sub_room_id : ''}}" >
    {!! $errors->first('sub_room_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
