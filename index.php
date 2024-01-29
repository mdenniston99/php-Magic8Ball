<?php

function magic8Ball() {
  echo "Tell me... what is your question?\n";

  $question = readline(">");
  echo "\nHmm I see... Your question is $question well\n here is your answer: ";

  $choice = rand(0, 19);
   

   if ($choice === 0) {
    echo "it is certian. \n";
   } elseif ($choice === 1) {
    echo "It is decidely so.\n";
   } elseif ($choice === 2) {
    echo "Without a doubt.\n";
   } elseif ($choice === 3) {
    echo "Definitely.\n";
   } elseif ($choice === 4) {
    echo "You msy rely on it.\n";
   } elseif ($choice === 5) {
    echo "As I see it, yes.\n";
   } elseif ($choice === 6) {
    echo "Most likely.\n";
   } elseif ($choice === 7) {
    echo "Outlook good.\n";
   } elseif ($choice === 8) {
    echo "Yes.\n";
   } elseif ($choice === 9) {
    echo "points to yes.\n";
   }elseif ($choice === 10) {
    echo "Reply hazy, try again.\n";
   }elseif ($choice === 11) {
    echo "Ask again later.\n";
   } elseif ($choice === 12) {
    echo "Better not tell you now.\n";
   } elseif ($choice === 13) {
    echo "Cannot Predict now.\n";
   } elseif ($choice === 14) {
    echo "Concentrate and ask again.\n";
   } elseif ($choice === 15) {
    echo "Dont count on it.\n";
   } elseif ($choice === 16) {
    echo "NO.\n";
   } elseif ($choice === 17) {
    echo "My sources say no.\n";
   } elseif ($choice === 18) {
    echo "Outlook not so good.\n";
   } elseif ($choice === 19) {
    echo "Very doubtful\n";
   }
}

magic8Ball();
