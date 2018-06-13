<?php

    class PromovabilityData {

        var $numberOfCommits;
        var $numberOfStackQuestions;
        var $mediaNotelor;
        var $numberOfPresences;
        var $numberOfInterventions;
        var $sugestia;
        var $sugestiaHTML;
        var $sugestiaCSS;
        var $sugestiaJavascript;
        var $sugestiaPHP;

        /**
         * PromovabilityData constructor.
         * @param $numberOfCommits
         * @param $numberOfStackQuestions
         * @param $mediaNotelor
         * @param $numberOfPresences
         * @param $numberOfInterventions
         * @param $sugestia
         * @param $sugestiaHTML
         * @param $sugestiaCSS
         * @param $sugestiaJavascript
         * @param $sugestiaPHP
         */
        public function __construct($numberOfCommits, $numberOfStackQuestions, $mediaNotelor, $numberOfPresences, $numberOfInterventions,
                                    $sugestia, $sugestiaHTML, $sugestiaCSS, $sugestiaJavascript, $sugestiaPHP)
        {
            $this->numberOfCommits = $numberOfCommits;
            $this->numberOfStackQuestions = $numberOfStackQuestions;
            $this->mediaNotelor = $mediaNotelor;
            $this->numberOfPresences = $numberOfPresences;
            $this->numberOfInterventions = $numberOfInterventions;
            $this->sugestia = $sugestia;
            $this->sugestiaHTML = $sugestiaHTML;
            $this->sugestiaCSS = $sugestiaCSS;
            $this->sugestiaJavascript = $sugestiaJavascript;
            $this->sugestiaPHP = $sugestiaPHP;
        }

        /**
         * @return mixed
         */
        public function getNumberOfCommits()
        {
            return $this->numberOfCommits;
        }

        /**
         * @param mixed $numberOfCommits
         */
        public function setNumberOfCommits($numberOfCommits): void
        {
            $this->numberOfCommits = $numberOfCommits;
        }

        /**
         * @return mixed
         */
        public function getNumberOfStackQuestions()
        {
            return $this->numberOfStackQuestions;
        }

        /**
         * @param mixed $numberOfStackQuestions
         */
        public function setNumberOfStackQuestions($numberOfStackQuestions): void
        {
            $this->numberOfStackQuestions = $numberOfStackQuestions;
        }

        /**
         * @return mixed
         */
        public function getMediaNotelor()
        {
            return $this->mediaNotelor;
        }

        /**
         * @param mixed $mediaNotelor
         */
        public function setMediaNotelor($mediaNotelor): void
        {
            $this->mediaNotelor = $mediaNotelor;
        }

        /**
         * @return mixed
         */
        public function getNumberOfPresences()
        {
            return $this->numberOfPresences;
        }

        /**
         * @param mixed $numberOfPresences
         */
        public function setNumberOfPresences($numberOfPresences): void
        {
            $this->numberOfPresences = $numberOfPresences;
        }

        /**
         * @return mixed
         */
        public function getNumberOfInterventions()
        {
            return $this->numberOfInterventions;
        }

        /**
         * @param mixed $numberOfInterventions
         */
        public function setNumberOfInterventions($numberOfInterventions): void
        {
            $this->numberOfInterventions = $numberOfInterventions;
        }

        /**
         * @return mixed
         */
        public function getSugestia()
        {
            return $this->sugestia;
        }

        /**
         * @param mixed $sugestia
         */
        public function setSugestia($sugestia): void
        {
            $this->sugestia = $sugestia;
        }

        /**
         * @return mixed
         */
        public function getSugestiaHTML()
        {
            return $this->sugestiaHTML;
        }

        /**
         * @param mixed $sugestiaHTML
         */
        public function setSugestiaHTML($sugestiaHTML): void
        {
            $this->sugestiaHTML = $sugestiaHTML;
        }

        /**
         * @return mixed
         */
        public function getSugestiaCSS()
        {
            return $this->sugestiaCSS;
        }

        /**
         * @param mixed $sugestiaCSS
         */
        public function setSugestiaCSS($sugestiaCSS): void
        {
            $this->sugestiaCSS = $sugestiaCSS;
        }

        /**
         * @return mixed
         */
        public function getSugestiaJavascript()
        {
            return $this->sugestiaJavascript;
        }

        /**
         * @param mixed $sugestiaJavascript
         */
        public function setSugestiaJavascript($sugestiaJavascript): void
        {
            $this->sugestiaJavascript = $sugestiaJavascript;
        }

        /**
         * @return mixed
         */
        public function getSugestiaPHP()
        {
            return $this->sugestiaPHP;
        }

        /**
         * @param mixed $sugestiaPHP
         */
        public function setSugestiaPHP($sugestiaPHP): void
        {
            $this->sugestiaPHP = $sugestiaPHP;
        }


    }
?>