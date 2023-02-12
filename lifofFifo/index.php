<?php

    class LIFO implements Pushable {
        private $data;

    }
    
    class FIFO implements Pushable {
        private $type;

    }
    
    class LIFOandFIFO implements Pushable {
        private $data;
        private $type;
    
    
        public function push(mixed $value) {
            $this->data->push($value);
        }
    
        public function pop(): mixed {
            return $this->data->pop();
        }
    }

?>