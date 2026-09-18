<?php


    class Task {
        public function job($logger) {
            for ($i = 0; $i < 10; $i++) {
                $logger->log("Task iteration: " . $i);
            }
        }
    }

    class consoleLogger {
        public function log($message) {
            echo $message . PHP_EOL;
        }
    }


    class Nothinglogger implements Logger, Writer {
        public function log($message) {
            // Do nothing
        }
    }

    interface Logger {
        public function log($message);
    }

    interface Writer {
        public function write($message);
    }

    class FileLogger implements Logger, Writer {
        private $file;

        public function __construct($file) {
            $this->file = $file;
        }

        public function log($message) {
            $this->write($message);
        }

        public function write($message) {
            file_put_contents($this->file, $message . PHP_EOL, FILE_APPEND);
        }
    }

    $logger = new consoleLogger();
    $task = new Task();
    $task->job($logger);