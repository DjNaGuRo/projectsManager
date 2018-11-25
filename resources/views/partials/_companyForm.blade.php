<div class="form-group">
  <label for="name" class="control-label sr-only">Company name:</label>
  {!!$errors->first('name', '<span class="alert alert-danger">:message</span>')!!}
  <input type="text" class="form-control" id="name" name="name" placeholder="Company Name" value="{{old('name') ?? $company->name ?? ''}}">
</div>
<div class="form-group">
  <label for="description" class="control-label sr-only">Company Description:</label>
  {!!$errors->first('description', '<span class="alert alert-danger">:message</span>')!!}
  <textarea class="form-control" id="description" name="description" rows="3" placeholder="Company Description">{{old('description') ?? $company->description ?? ''}}</textarea>
</div>
<button type="submit" class="btn btn-primary">{{$btn_value}}</button>