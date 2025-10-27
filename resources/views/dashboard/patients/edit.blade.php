<x-dash>
    <p class="h1">patients edit page</p>
    <form action="{{ route('patients.modify',$patient->id) }}" method="POST">
        @csrf

        @method('PUT')


        <label  class="frmlabel" for="Name">Name</label>

        <div>
            <Input class="frminput" type="text" placeholder="name" name="name" value="{{ $patient->name }}"></Input>


        </div>
        <label  class="frmlabel" for="Name">Email</label>
        <div>
             <Input class="frminput" type="email"  name="email"  value="{{ $patient->email }}"></Input>


        </div>
         <label  class="frmlabel" for="Name">Phone</label>
        <div>
             <Input class="frminput" type="text" placeholder="Phone" name="phone" value="{{$patient->phone }}"></Input>


        </div>
         <label  class="frmlabel" for="Name">Address</label>
        <div>
             <Input class="frminput" type="text" placeholder="Address" name="address" value="{{ $patient->address }}"></Input>


        </div>
        <button class="frmbtn"> Submit</button>



    </form>


</x-dash>
