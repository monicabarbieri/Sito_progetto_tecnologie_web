<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header w3-purple row justify-content-center"><?php echo e(__('Modify Account')); ?></div>

                <div class="card-body">
                    <form method="POST"  action=" {{ URL::action('UserController@update', $user)}}">
                    <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field() }}
                    @if (session('alert'))
<div class="alert alert-danger">
    	{{ session('alert') }}
	</div>
@endif

                        <div class="form-group row">
                            <label for="name"  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>
                            <div class="col-md-6">
                                <input id="name" name="name" value="{{ $user->name}}" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname"  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Surname')); ?></label>
                            <div class="col-md-6">
                                <input id="surname" name="surname" value="{{ $user->surname}}" type="text" class="form-control">
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="address"  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>
                            <div class="col-md-6">
                                <input id="address"type="text"  name="address" value="{{ $user->address}}" class="form-control">
                                </div>
                        </div>


                        <div class="form-group row">
                            <label for="gender"  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>
                            <div class="col-md-6">
                            <p>
                        <input class="w3-radio" type="radio" name="gender" value="{{ $user->gender}}" name="gender" value="male" checked>
                        <label>Male</label></p>
                        <p>
                        <input class="w3-radio" type="radio" name="gender" value="{{ $user->gender}}" name="gender" value="female">
                        <label>Female</label></p>
                        <p>
                        <p>
                        <input class="w3-radio" type="radio" name="gender" value="other">
                        <label>Other</label></p>
                        <p>
                            </div>
                        </div>
                             

                        <div class="form-group row">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Telephone number')); ?></label> 
                            <div class="col-md-6">
                            <input type="tel" id="telephone_number" name="telephone_number" value="{{ $user->telephone_number}}" placeholder="333 1234567" pattern="[0-9]{10}" ><br><br>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Date of birth')); ?></label>
                            <div class="col-md-6">
                                <input id="date_of_birth"   value="{{ $user->date_of_birth}}" name="date_of_birth" type="date" class="form-control" > 
                            </div>
                        </div>


                        <div class="form-group row">
                        <label for="ssn"  class="col-md-4 col-form-label text-md-right"><?php echo e(__('SSN')); ?></label>
                        <div class="col-md-6">
                            <input id="SSN"  value="{{ $user->SSN}}" name="SSN" type="text" class="form-control"> 
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="email"  class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>
                        <div class="col-md-6">
                            <input id="email"  value="{{ $user->email}}" name="email" type="strin" class="form-control"> 
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                            <div class="col-md-6">
                                <input id="password" type="password"  name="password" value="{{ $user->password}}" class="form-control">
                            </div>
                        </div>

                        <div class="row justify-content-center">
                        <p style="font-size:12px">Password must be composed of the least 8 characters!</p>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password"  value="{{ $user->password_confirmation}}"  class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <button type="save" class="btn w3-purple" onclick="return confirm('Confirm the changes?')" >Update</button>

   <!-- creo una nuova rotta per sovrascivere quella precedente per l'eleminazione -->

 

  <a href="{{ URL::action('UserController@index') }}" class="btn btn-secondary" onclick="return confirm('Changes not confermed, Do you want to go back?') ">Back</a><div>
    <br>
</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ardi/Slurp/resources/views/auth/register.blade.php ENDPATH**/ ?>