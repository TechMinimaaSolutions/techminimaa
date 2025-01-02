<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-center mb-6">Image Upload System</h2>

            <!-- Upload Form -->
            <form id="uploadForm" class="space-y-4">
                @csrf
                <div class="relative border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                    <input type="file" 
                           id="image" 
                           name="image" 
                           class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                           accept="image/*">
                    <div class="space-y-2">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="text-sm text-gray-600">
                            <label for="image" class="relative cursor-pointer rounded-md font-medium text-[#00e9c2] hover:text-[#00e9c2] focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-[#00e9c2]">
                                <span>Upload an image</span>
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                    </div>
                </div>

                <button type="submit" 
                        class="w-full bg-[#00e9c2] text-white rounded-lg px-4 py-2 hover:bg-[#00e9c2]/90 focus:outline-none focus:ring-2 focus:ring-[#00e9c2] focus:ring-offset-2">
                    Upload Image
                </button>
            </form>

            <!-- Preview Area -->
            <div id="previewArea" class="mt-6 hidden">
                <h3 class="font-semibold text-lg mb-2">Upload Success!</h3>
                <div class="space-y-2">
                    <div class="aspect-w-16 aspect-h-9">
                        <img id="imagePreview" class="rounded-lg object-cover w-full" src="" alt="Uploaded image">
                    </div>
                    <div class="relative">
                        <input type="text" 
                               id="imageUrl" 
                               class="w-full pr-20 border rounded-lg px-3 py-2 text-sm" 
                               readonly>
                        <button onclick="copyUrl()" 
                                class="absolute right-2 top-1/2 -translate-y-1/2 text-sm text-[#00e9c2] hover:text-[#00e9c2]/90">
                            Copy URL
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
       $(document).ready(function() {
    $('#uploadForm').on('submit', function(e) {
        e.preventDefault();
        
        let formData = new FormData();
        formData.append('image', $('#image')[0].files[0]);
        formData.append('_token', $('input[name="_token"]').val());

        $.ajax({
            url: '{{ route("upload.image") }}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response.success) {
                    // Remove any potential double domain
                    let imageUrl = response.url;
                    if (imageUrl.includes(window.location.origin)) {
                        imageUrl = imageUrl.replace(window.location.origin, '');
                    }
                    
                    $('#imagePreview').attr('src', imageUrl);
                    $('#imageUrl').val(window.location.origin + imageUrl);
                    $('#previewArea').removeClass('hidden');
                }
            },
            error: function(xhr) {
                alert('Upload failed. Please try again.');
            }
        });
    });
});
    </script>
</body>
</html>