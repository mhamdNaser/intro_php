showname = () => {
    var x = document.getElementById("name").value
    document.getElementById("name2").innerHTML = "hello  " + x
}


    // Create the canvas element
    var canvas = document.createElement('canvas');
    canvas.id = 'my-canvas';

    // Set the width and height of the canvas
    canvas.width = 500;
    canvas.height = 500;

    // Add the canvas to the page
    document.body.appendChild(canvas);

    // Get a reference to the canvas context
    var ctx = canvas.getContext('2d');

    // Draw a ball on the canvas
    ctx.beginPath();
    ctx.arc(250, 250, 50, 0, 2 * Math.PI);
    ctx.fillStyle = 'red';
    ctx.fill();


    // // Get a reference to the canvas element
    // var canvas = document.getElementById("myCanvas");
    // // Get the canvas 2D context, which is used to draw on the canvas
    // var ctx = canvas.getContext("2d");

    // // Set the starting position of the line
    // var x = 0;
    // var y = 200;

    // // Set the line color and width
    // ctx.strokeStyle = "red";
    // ctx.lineWidth = 5;

    // // Draw the line on the canvas
    // ctx.beginPath();
    // ctx.moveTo(x, y);
    // ctx.lineTo(x + 100, y);
    // ctx.stroke();

    // // Animate the line by moving it to the right
    // function animate() {
    //     x += 5;
    //     ctx.clearRect(0, 0, canvas.width, canvas.height);
    //     ctx.beginPath();
    //     ctx.moveTo(x, y);
    //     ctx.lineTo(x + 100, y);
    //     ctx.stroke();
    //     requestAnimationFrame(animate);
    // }

    // // Start the animation
    // animate();


//     // Get a reference to the video element on the page
// var video = document.getElementById('video');

// // Get access to the camera
// navigator.mediaDevices.getUserMedia({ video: true })
//   .then(function(stream) {
//     // Attach the video stream to the video element
//     video.srcObject = stream;
//     video.play();
//   })
//   .catch(function(err) {
//     // Handle any errors
//     console.log('Error: ' + err);
//   });
