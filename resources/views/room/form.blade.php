<div class="form-group {{ $errors->has('id_room') ? 'has-error' : ''}}">
    <label for="id_room" class="control-label">{{ 'Id Room' }}</label>
    <input class="form-control" name="id_room" type="text" id="id_room" value="{{ isset($room->id_room) ? $room->id_room : ''}}" >
    {!! $errors->first('id_room', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('layer') ? 'has-error' : ''}}">
    <label for="layer" class="control-label">{{ 'Layer' }}</label>
    <input class="form-control" name="layer" type="text" id="layer" value="{{ isset($room->layer) ? $room->layer : ''}}" >
    {!! $errors->first('layer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('picter') ? 'has-error' : ''}}">
    <label for="picter" class="control-label">{{ 'Picter' }}</label>
    <input class="form-control" name="picter" type="file" id="picter" value="{{ isset($room->picter) ? $room->picter : ''}}" >
    {!! $errors->first('picter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="{{ isset($room->type) ? $room->type : ''}}" >
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
