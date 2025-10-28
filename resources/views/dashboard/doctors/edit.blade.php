<x-dash>
    <p class="h1">Edit Doctor</p>
    <form action="{{ route('doctors.modify',$doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label  class="frmlabel" for="Name">Name</label>

        <div>
            <Input class="frminput" type="text" placeholder="name" name="name" value="{{ $doctor->name }}"></Input>


        </div>
        <label  class="frmlabel" for="Name">Email</label>
        <div>
             <Input class="frminput" type="email"  name="email" value="{{ $doctor->email }}"  ></Input>


        </div>
         <label  class="frmlabel" for="Name">Phone</label>
        <div>
             <Input class="frminput" type="text" placeholder="Phone" name="phone"  value="{{ $doctor->phone }}"></Input>


        </div>
         <label  class="frmlabel" for="Name">Address</label>
        <div>
             <Input class="frminput" type="text" placeholder="Address" name="address" value="{{ $doctor->address }}"></Input>


        </div>
         <label  class="frmlabel" for="Name">Specialization</label>
        <div>
             <Input class="frminput" type="text" placeholder="Specialization" name="specialization" value="{{$doctor->specialization}}"></Input>


        </div>
           <label  class="frmlabel" for="Name">Gender</label>
        <div>
             <Input class="frminput" type="text" name="gender" value="{{$doctor->gender}}"></Input>


        </div>



        <button class="frmbtn"> Submit</button>



    </form>


</x-dash>
