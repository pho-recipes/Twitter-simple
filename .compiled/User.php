<?php

namespace PhoNetworksAutogenerated;

use Pho\Framework;
use Pho\Kernel\Kernel;
use Pho\Kernel\Traits;
use Pho\Kernel\Foundation;




/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class User extends Foundation\AbstractActorDP {

    const T_EDITABLE = false;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x07554;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"username\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":\"\\/^[_a-z0-9]{1,18}$\\/\",\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":true,\"index\":false}},\"password\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":\"\\/^[a-zA-Z0-9_]{4,12}$\\/\",\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":true,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"join_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"birthday\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"01\\/15\\/1983\",\"unique\":false,\"index\":false}},\"about\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"\",\"unique\":false,\"index\":false}}}";

    const FEED_SIMPLE = "";
    const FEED_AGGREGATED = "";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Lib\Graph\GraphInterface $graph , string $username, string $password, ?string $birthday = "01/15/1983", ?string $about = "")
    {
        $this->registerIncomingEdges(UserOut\Follow::class);
        $this->registerIncomingEdges(TweetOut\Mention::class);
        $this->registerIncomingEdges(UserOut\Consume::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Post::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Post::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Like::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Like::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Follow::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Follow::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Consume::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Consume::class);
        parent::__construct($kernel, $graph);
                $this->setUsername($username, true);
        $this->setPassword($password, true);
        $this->setJoinTime(time(), true);
        $this->setBirthday(strtotime($birthday), true);
        $this->setAbout($about, true);

        $this->persist();
        $this->context()->emit("particle.formed", [$this]);
    }

}

/*****************************************************
 * Timestamp: 1555904811
 * Size (in bytes): 3757
 * Compilation Time: 91
 * 9d19e76da60499025b5d68721e475d57
 ******************************************************/