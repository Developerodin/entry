<style>
    .ring {
    position: relative;
    width: fit-content; /* Adjust according to your design */
    margin: 0 auto; /* Center the ring horizontally */
}

.rotate {
    position: absolute;
    top: 50%;
    left: 48%;
    transform: translate(-50%, -50%);
    animation: rotate 3s linear infinite; /* Adjust duration and animation timing as needed */
    padding-right:10px;
    width:29vw;
}

@keyframes rotate {
    from {
        transform: translate(-50%, -50%) rotate(0deg);
    }
    to {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}

</style>

<div class="col-md-6 ">
    <div class="ring">
        <img src="ring1.png" alt="">
        <img src="ring2.png" alt="" class="rotate">
    </div>
</div>