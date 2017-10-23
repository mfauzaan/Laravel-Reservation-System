<form action="{{ url('/') }}" method="POST">
  {{ csrf_field()}}
<div class="form-group">
  <input id="name" type="text" name="name" class="form-control" placeholder="Your Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
  <input id="email" type="email" name="email" class="form-control" placeholder="Email">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
  <input id="phone" type="number" name="phone" class="form-control" placeholder="Contact Number">
</div>
</div>
<div class="col-md-6">
<input id="subject" type="text" name="subject" class="form-control" placeholder="Subject">
</div>
</div>
<div class="form-group">
<textarea id="message" name="message" class="form-control" rows="7" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" class="button large dark" value="Submit">
</div>
</form>
