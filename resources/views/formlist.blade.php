<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
<h1>Form List</h1>
<ul>
    @foreach($forms as $form)
        <li>{{ $form->name }}</li>
    @endforeach
</div>
