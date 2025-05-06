

<x-layout meta-title="create new post" meta-description="Form to create a new post">

   
    

      



   <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">crear post</h1>






    <form method="POST" action="{{ route('posts.store') }}" class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">titulo</label>

            <input value="{{  old('title') }}" name="title" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
       
@error('title')

<br>
<small class="text-red-500"> {{ $message }} </small>

@enderror


        </div>
        <div class="mb-6">
            <label for="body" class="block text-gray-700 font-bold mb-2">body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                {{old('body')}}
            </textarea>


            @error('body')

            <br>
            <small class="text-red-500"> {{ $message }} </small>
            
            @enderror
            


        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-orange-500 text-sky-500 px-4 py-2 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">
                Send
            </button>
            <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-gray-800">Back</a>
        </div>
    </form>
</div>


   
    </x-layout>
    