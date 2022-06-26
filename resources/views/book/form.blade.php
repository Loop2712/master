<div class="form-group {{ $errors->has('id_room') ? 'has-error' : ''}}">
    <label for="id_room" class="control-label">{{ 'Id Room' }}</label>
    <input class="form-control" name="id_room" type="text" id="id_room" value="{{ isset($book->id_room) ? $book->id_room : ''}}" >
    {!! $errors->first('id_room', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sub_name') ? 'has-error' : ''}}">
    <label for="sub_name" class="control-label">{{ 'Sub Name' }}</label>
    <input class="form-control" name="sub_name" type="text" id="sub_name" value="{{ isset($book->sub_name) ? $book->sub_name : ''}}" >
    {!! $errors->first('sub_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('professor') ? 'has-error' : ''}}">
    <label for="professor" class="control-label">{{ 'Professor' }}</label>
    <input class="form-control" name="professor" type="number" id="professor" value="{{ isset($book->professor) ? $book->professor : ''}}" >
    {!! $errors->first('professor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day') ? 'has-error' : ''}}">
    <label for="day" class="control-label">{{ 'Day' }}</label>
    <input class="form-control" name="day" type="date" id="day" value="{{ isset($book->day) ? $book->day : ''}}" >
    {!! $errors->first('day', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time_start') ? 'has-error' : ''}}">
    <label for="time_start" class="control-label">{{ 'Time Start' }}</label>
    <input class="form-control" name="time_start" type="time" id="time_start" value="{{ isset($book->time_start) ? $book->time_start : ''}}" >
    {!! $errors->first('time_start', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time_end') ? 'has-error' : ''}}">
    <label for="time_end" class="control-label">{{ 'Time End' }}</label>
    <input class="form-control" name="time_end" type="time" id="time_end" value="{{ isset($book->time_end) ? $book->time_end : ''}}" >
    {!! $errors->first('time_end', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('esc') ? 'has-error' : ''}}">
    <label for="esc" class="control-label">{{ 'Esc' }}</label>
    <textarea class="form-control" rows="5" name="esc" type="textarea" id="esc" >{{ isset($book->esc) ? $book->esc : ''}}</textarea>
    {!! $errors->first('esc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="text" id="user_id" value="{{ isset($book->user_id) ? $book->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($book->phone) ? $book->phone : ''}}" >
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
