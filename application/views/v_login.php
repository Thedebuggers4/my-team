<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ujian Online</title>
    <link rel="shortcut icon" href="image/kemendikbud.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/css.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }
        .login-box {
            margin-top: 75px;
            max-width: 400px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            z-index: 2;
        }
        .login-box-body {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            padding: 40px 30px;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            animation: fadeIn 1s ease-in-out;
        }
        .login-logo {
            margin-bottom: 30px;
            text-align: center;
        }
        .login-logo img {
            width: 80px;
            margin-bottom: 15px;
            animation: pulse 2s infinite;
        }
        .login-logo h3 {
            margin-top: 10px;
            font-weight: 600;
            color: #333;
        }
        .login-logo span {
            color: #2a5298;
        }
        .form-control {
            height: 45px;
            border-radius: 30px;
            box-shadow: none;
            border: 1px solid #ddd;
            padding-left: 15px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #2a5298;
            box-shadow: 0 0 8px rgba(42, 82, 152, 0.2);
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        .form-control-feedback {
            color: #999;
            line-height: 45px;
            right: 15px;
        }
        .btn-login {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            border: none;
            color: white;
            border-radius: 30px;
            padding: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(42, 82, 152, 0.3);
        }
        .btn-login:hover, .btn-login:focus {
            background: linear-gradient(to right, #2a5298, #1e3c72);
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(42, 82, 152, 0.4);
        }
        .text-footer {
            margin-top: 30px;
            font-size: 15px;
            color: #666;
            text-align: center;
        }
        .alert-message {
            border-radius: 8px;
            margin-top: 20px;
        }
        .text-danger {
            font-size: 12px;
            margin-left: 15px;
            margin-top: 5px;
            display: block;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div id="particles-js"></div>
    
    <div class="login-box animate__animated animate__fadeIn">
        <div class="login-box-body">
            <div class="login-logo">
                <img src="image/kemendikbud.png" alt="Logo Kemendikbud" class="animate__animated animate__pulse">
                <h3><b>Ujian</b> <span>Online</span></h3>
            </div>

            <form action="<?php echo base_url('auth') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-block btn-login">
                            Masuk <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </div>
            </form>

            <?= $this->session->flashdata('message'); ?>

            <div class="text-footer">
                <p><i class="fa fa-graduation-cap"></i> Ayo Ujian! Sukses Selalu</p>
            </div>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <script type="text/javascript">
        $('.alert-message').alert().delay(3000).slideUp('slow');
        
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 3,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    </script>
</body>

</html>
