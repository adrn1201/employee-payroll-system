<x-structure.layout>
    <x-structure.sidenav class="sidenav" />

    <main class="main-content" id="panel">
        <x-structure.topnav/>
        <x-structure.header label="Create Record"/>

        {{-- Form Container Start Can't Separate into a Component. Structure Changes--}}
        <div class="container mt--6">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <h3 class="mb-0">Create a new Department Record</h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="/department-records/">
                                @csrf
                                <x-forms.input name="name" text="Department Name" placeholder="Enter Department Name"/>
                                <x-forms.input name="slug" text="Slug" placeholder="Enter Slug"/>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mx-auto text-center">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-structure.footer />
        </div>
        {{-- End Container --}}
    </main>
</x-structure.layout>
