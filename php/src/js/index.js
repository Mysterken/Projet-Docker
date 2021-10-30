function verif() {
    if (document.getElementById('classe').value == '' || document.getElementById('nom').value == '') {
        document.getElementById('validation').disabled = true;
    } else document.getElementById('validation').disabled = false;
}

document.addEventListener("DOMContentLoaded", function (event) {
    var c = document.getElementById('canvas');
    var ctx = c.getContext('2d');
    var validation = document.getElementById('validation');

    c.width = window.innerWidth;
    c.height = window.innerHeight;

    var mouseX = c.width / 2;
    var mouseY = c.height / 2;
    var txtPosition = 0;

    var particles = [];

    validation.addEventListener('mouseup', function (e) {
        mouseX = e.clientX;
        mouseY = e.clientY;

        createParticles();
        changeText();
    });

    setTimeout(function () {
        createParticles();
    }, 250);

    draw();

    function draw() {

        drawBg();
        incParticles();
        drawParticles();

        window.requestAnimationFrame(draw);

    }

    function drawBg() {
        ctx.rect(0, 0, c.width, c.height);
        ctx.fillStyle = "rgb(40, 45, 50)";
        ctx.fill();
    }

    function drawParticles() {
        for (i = 0; i < particles.length; i++) {
            ctx.beginPath();
            ctx.arc(particles[i].x,
                particles[i].y,
                particles[i].size,
                0,
                Math.PI * 2);
            ctx.fillStyle = particles[i].color;
            ctx.closePath();
            ctx.fill();
        }
    }

    function incParticles() {
        for (i = 0; i < particles.length; i++) {
            particles[i].x += particles[i].velX;
            particles[i].y += particles[i].velY;

            particles[i].size = Math.max(0, (particles[i].size - .05));

            if (particles[i].size === 0) {
                particles.splice(i, 1);
            }
        }
    }

    function createParticles() {
        for (i = 0; i < 30; i++) {
            particles.push({
                x: mouseX,
                y: mouseY,
                size: parseInt(Math.random() * 10),
                color: 'rgb(' + ranRgb() + ')',
                velX: ranVel(),
                velY: ranVel()
            });
        }
    }

    function ranRgb() {
        var colors = [
            '255, 122, 206',
            '0, 157, 255',
            '0, 240, 168',
            '0, 240, 120'
        ];

        var i = parseInt(Math.random() * 10);

        return colors[i];
    }

    function ranVel() {
        var vel = 0;

        if (Math.random() < 0.5) {
            vel = Math.abs(Math.random());
        } else {
            vel = -Math.abs(Math.random());
        }

        return vel;
    }

// Text

    var validationTxt = [
        'Cliquez pour valider',
        'ouch!',
        'sparkles!',
        'ooh',
        'oooooh',
        'ooooooooooh',
        'HARDER',
        'softer',
        'tenderly',
        'this is getting weird',
        'please stop',
        '"gags"',
        'woof',
        'meow',
        '@Lewitje'
    ];

    function changeText() {
        if (txtPosition !== validationTxt.length) {
            validation.innerHTML = validationTxt[txtPosition];
            txtPosition += 1;
        }
    }

    let button = document.getElementById('validation')

    // Envoi les données du joueur en bd
    button.addEventListener('click', () => {
        if (document.getElementById('validation').disabled) return;

        async function createCharacter() {
            const response = await fetch('./createCharacter.php', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name: document.getElementById('nom').value,
                    classe: document.getElementById('classe').value
                })
            });
            return response;
        }

        createCharacter()
            .then(data => {
                if (data.status == 200) {
                    window.location.href = 'play.php';
                }
            });
    })
});