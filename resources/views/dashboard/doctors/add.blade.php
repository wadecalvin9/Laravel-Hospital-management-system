<x-dash>
    <p class="h1">Register Doctor</p>
    <form action="{{ route('doctors.create') }}" method="POST">
        @csrf
        <label  class="frmlabel" for="Name">Name</label>

        <div>
            <Input class="frminput" type="text" placeholder="name" name="name"></Input>


        </div>
        <label  class="frmlabel" for="Name">Email</label>
        <div>
             <Input class="frminput" type="email"  name="email"  ></Input>


        </div>
         <label  class="frmlabel" for="Name">Phone</label>
        <div>
             <Input class="frminput" type="text" placeholder="Phone" name="phone" ></Input>


        </div>
         <label  class="frmlabel" for="Name">Address</label>
        <div>
             <Input class="frminput" type="text" placeholder="Address" name="address"></Input>


        </div>
         <label  class="frmlabel" for="Name">Specialization</label>
        <div>
             <Input class="frminput" type="text" placeholder="Specialization" name="specialization"></Input>


        </div>
           <label  class="frmlabel" for="Name">Gender</label>
        <div>
             <Input class="frminput" type="text" placeholder="Gender" name="gender"></Input>


        </div>



        <button class="frmbtn"> Submit</button>



    </form>


</x-dash>
