<?php
Class Pages {
   //Get pages function
    public function getPages($page) {
        $this->pageName = $page;
        return $this->pageName;
    }
    //Get action function
    public function getActions($action) {
        $this->actionName = $action;
        return $this->actionName;
    }

    public function fetch_content($page,$action) {
        if (isset($page)) {
            $this->getPages($page);
            if (isset($action)) {
                $this->getActions($action);
                return $this->includeUrl("../".$this->getPages($page)."/".$this->getActions($action).".php");
            }else {
                return $this->includeUrl("../".$this->getPages($page)."/".$this->getActions("index").".php");
            }
        }
    }

    public function includeUrl($url) {
        include("$url");
    }
    
}
?>