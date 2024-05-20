

<div class="my-3 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <a href="#">
            @if($post->images->isNotEmpty())
                <div class="images">
                    @foreach($post->images as $image)
                        <img class="rounded-t-lg" src="{{ Storage::url($image->imgUrl) }}" alt="Post Image">
                    @endforeach
                </div>
            @else
                <p>No images available.</p>
            @endif
        </a>
        <p class="mt-2 mb-3 font-normal text-gray-700 dark:text-gray-400">
            <?php if (strlen($post->caption) < 200){
                echo $post->caption;
            }else {
                $str_1 = substr($post->caption,0,300);
                $str_2 = substr($post->caption,300);
                ?>
             <?php echo $str_1?>
            <span class="hidden" id="more-text">
                <?php echo $str_2?>
            </span>
            <button id="toggle-btn" class=" text-blue-500 focus:outline-none">More...</button>
            <button id="hide-btn" class="hidden  text-blue-500 focus:outline-none">Less</button>
            <?php }?>
           
            
        </p>

        <div class="grid grid-cols-2">
            <div class="grid grid-cols-5">
                <div class ="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke="#ffffff" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                    </svg>
                </div>
                <div class = "mr-2 col-span-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke="#ffffff" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                </div>
            </div>
        </div>

        


       
        
    </div>
</div>

<script>
    const moreTextEl = document.getElementById('more-text');
    const toggleBtnEl = document.getElementById('toggle-btn');
    const hideBtnEl = document.getElementById('hide-btn');

    toggleBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });

    hideBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });
</script>
