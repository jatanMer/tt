<?php include('header.php'); ?>

<section class="bg-gradient-to-b from-gray-900 to-black py-12 md:py-20" id="faq">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-10 md:mb-12">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white mb-4">
        Frequently Asked <span class="text-yellow-400">Questions</span>
      </h2>
      <p class="text-base sm:text-lg text-gray-300">
        Answers about <strong>Teen Patti Master</strong>, <strong>Play Teen Patti Online</strong>, <strong>Download Teen Patti APK</strong>, and more to help you get started or level up your game!
      </p>
    </div>

    <div class="space-y-8">
      <?php
      $faqs = [
        [
          "question" => "1. What is Teen Patti Master and why is it the best Teen Patti app for Android?",
          "answer" => "Teen Patti Master is India's top-rated <strong>Teen Patti</strong> app, offering a seamless <strong>Play Teen Patti Online</strong> experience with secure transactions, exclusive tournaments, and exciting bonuses. Download the <strong>Teen Patti Master 2025 APK</strong> for the latest features and enjoy the most authentic Indian card game on your Android device."
        ],
        [
          "question" => "2. How do I download Teen Patti Master APK for Android?",
          "answer" => "To <strong>Download Teen Patti APK</strong>, visit our official website and click on the <strong>Download APK</strong> button. The <strong>Teen Patti Master 2025 APK</strong> is optimized for Android devices (OS 5.0+), ensuring a fast and secure installation process."
        ],
        [
          "question" => "3. How can I play Teen Patti online with friends?",
          "answer" => "After downloading the <strong>Teen Patti Master APK</strong>, create an account and invite friends using your unique referral code. You can challenge friends to private tables or join public tournaments to <strong>Play Teen Patti Online</strong> with players across India."
        ],
        [
          "question" => "4. What are the system requirements for Teen Patti Master APK?",
          "answer" => "The app requires Android OS 5.0 or higher with at least 2GB RAM. The APK size is approximately 100MB, and a stable internet connection is recommended for smooth gameplay."
        ],
        [
          "question" => "5. How do I earn bonuses and participate in tournaments?",
          "answer" => "New players receive a <strong>Teen Patti referral bonus</strong> and daily login rewards. Join exciting tournaments, complete challenges, and climb the leaderboard to win real cash prizes. Check the <strong>Rewards</strong> section regularly for special offers."
        ],
        [
          "question" => "6. How do I withdraw my winnings?",
          "answer" => "Go to your <strong>Wallet</strong>, select <strong>Withdraw</strong>, enter the amount, and choose your preferred payment method. Withdrawals are processed securely within 24–48 hours."
        ],
        [
          "question" => "7. Why is Teen Patti Master considered the best Teen Patti app for Android?",
          "answer" => "Teen Patti Master offers authentic gameplay, secure transactions, exclusive tournaments, and a user-friendly interface. Download the <strong>Teen Patti Master 2025 APK</strong> for the latest features and enjoy the most trusted <strong>Play Teen Patti Online</strong> experience."
        ],
        [
          "question" => "8. How can I get the latest Teen Patti APK updates?",
          "answer" => "Updates are available through our official website. Download the <strong>Teen Patti Master 2025 APK</strong> regularly to access new game modes, features, and rewards."
        ]
      ];

      foreach ($faqs as $faq) {
        echo '
        <div class="bg-gradient-to-r from-white to-gray-100 rounded-xl shadow-lg p-6 md:p-8 transition hover:shadow-2xl mb-4">
          <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-3">' . $faq["question"] . '</h3>
          <p class="text-base text-gray-700 leading-relaxed">' . $faq["answer"] . '</p>
        </div>';
      }
      ?>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
