<div class="form-group">
  <label for="name">Company name:</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Company Name" value="{{old('name') ?? $company->name}}">
</div>
<div class="form-group">
  <label for="description">Company Description:</label>
  <textarea class="form-control" id="description" name="description" rows="3" placeholder="Company Description">{{old('description') ?? $company->description}}</textarea>
</div>
<button type="submit" class="btn btn-primary">{{$btn_value}}</button>