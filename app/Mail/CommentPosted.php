<?php

namespace App\Mail;

// 追加
use App\Models\Comment;
use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentPosted extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $comment;

    public function __construct(User $user, Comment $comment)
    {
        $this->user = $user;
        $this->comment = $comment;
    }

    public function build()
    {
        return $this
            ->subject('コメントありがとうございます')
            ->view('comments.posted');
    }
}
