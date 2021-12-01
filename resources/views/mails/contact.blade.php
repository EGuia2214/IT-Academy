<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body>

    <div class="mx-auto mt-8 w-1/2">
        @csrf

        <h1 class="mx-auto font-bold">Formulario de contacto</h1>

        <form class="mt-8 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('contact.store')}}"  method="POST">

            @csrf
 
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Subject">
                  Subject
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="subject" type="text" placeholder="Subject?">
            </div>
              
              
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Name">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Your name">
          </div>
          
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Email">
              Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="Your Email">
          </div>

          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Message">
              Message
            </label>
            <textarea rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="message" placeholder="Your Message">
            </textarea>    
          </div>

          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Send
            </button>     
          </div>

        </form>
        <p class="text-center text-gray-500 text-xs">
          &copy;2020 Acme Corp. All rights reserved.
        </p>
      </div>
</body>
</html>
