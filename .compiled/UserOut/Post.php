<?php

namespace PhoNetworksAutogenerated\UserOut 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Post extends Foundation\ActorOut\Write {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "post";
    const HEAD_LABELS = "posts";
    const TAIL_LABEL = "author";
    const TAIL_LABELS = "authors";
    

    const FORMABLES = [\PhoNetworksAutogenerated\Tweet::class];
    


}

/* Predicate to load as a partial */
class PostPredicate extends Foundation\ActorOut\WritePredicate
{
    protected $binding = true;
    protected $multiplicable = false;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = true;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class PostNotification extends Foundation\ActorOut\WriteNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1337
 * Compilation Time: 7779
 * eb75e4eca7bf825edc7ff4fd601b1f5e
 ******************************************************/