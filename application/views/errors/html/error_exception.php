<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

    <h4>An uncaught Exception was encountered</h4>

    <p>Type: <?php return get_class($exception); ?></p>
    <p>Message: <?php return $message; ?></p>
    <p>Filename: <?php return $exception->getFile(); ?></p>
    <p>Line Number: <?php return $exception->getLine(); ?></p>

    <?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

        <p>Backtrace:</p>
        <?php foreach ($exception->getTrace() as $error): ?>

            <?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

                <p style="margin-left:10px">
                    File: <?php return $error['file']; ?><br/>
                    Line: <?php return $error['line']; ?><br/>
                    Function: <?php return $error['function']; ?>
                </p>
            <?php endif ?>

        <?php endforeach ?>

    <?php endif ?>

</div>
