// Karma Quotes Data
const karmaQuotes = [
  // JUSTICE & KARMA QUOTES
  {
    text: "Leave behind the passive dreaming of a rose-tinted future. The energy of happiness exists in living today with roots sunk firmly in reality's soil.",
    author: "Daisaku Ikeda",
    category: "justice"
  },
  {
    text: "Sooner or later in life, we will all take our own turn being in the position we once had someone else in.",
    author: "Ashly Lorenzana",
    category: "justice"
  },
  {
    text: "Dangerous consequences will follow when politicians and rulers forget moral principles. Whether we believe in God or karma, ethics is the foundation of every religion.",
    author: "Dalai Lama XIV",
    category: "justice"
  },
  {
    text: "Karma is a tricky thing. To serve Karma, one must repay good Karma to others. To serve Karma well, one must sometimes deliver bad Karma where it is due.",
    author: "M.R. Mathias",
    category: "justice"
  },
  {
    text: "Treat other people's home as you want them to respect yours because what goes around comes around.",
    author: "Ana Monnar",
    category: "justice"
  },
  {
    text: "You cannot do harm to someone because someone has done harm to you. You will pay just like they will.",
    author: "Ericka Williams",
    category: "justice"
  },
  {
    text: "When you truly understand karma, then you realize you are responsible for everything in your life.",
    author: "Keanu Reeves",
    category: "action"
  },
  {
    text: "How people treat you is their karma; how you react is yours.",
    author: "Wayne Dyer",
    category: "action"
  },
  {
    text: "The universe does not carry debts. It always returns back to you what you gave it.",
    author: "Drishti Bablani",
    category: "consequences"
  },
  {
    text: "I try to live with the idea that karma is a very real thing. So I put out what I want to get back.",
    author: "Megan Fox",
    category: "action"
  },
  {
    text: "People pay for what they do, and, still more, for what they have allowed themselves to become. And they pay for it simply: by the lives they lead.",
    author: "James Baldwin",
    category: "consequences"
  },
  {
    text: "Realize that everything connects to everything else.",
    author: "Leonardo da Vinci",
    category: "action"
  },
  {
    text: "Men are not punished for their sins, but by them.",
    author: "Elbert Hubbard",
    category: "consequences"
  },
  {
    text: "If you give a good thing to the world, then over time your karma will be good, and you'll receive good.",
    author: "Russell Simmons",
    category: "consequences"
  },
  {
    text: "There are the waves, and there is the wind, seen and unseen forces. Everyone has these same elements in their lives, the seen and unseen, karma and free will.",
    author: "Kuan Yin",
    category: "justice"
  },
  {
    text: "I believe in Karma. If the good is sown, the good is collected. When positive things are made, that returns well.",
    author: "Yannick Noah",
    category: "consequences"
  },
  {
    text: "Every action of our lives touches on some chord that will vibrate in eternity.",
    author: "Edwin Hubbell Chapin",
    category: "action"
  },
  {
    text: "There's a natural law of karma that vindictive people, who go out of their way to hurt others, will end up broke and alone.",
    author: "Sylvester Stallone",
    category: "consequences"
  },
  {
    text: "Your believing or not believing in karma has no effect on its existence, nor on its consequences to you. Just as a refusal to believe in the ocean would not prevent you from drowning.",
    author: "F. Paul Wilson",
    category: "justice"
  },
  {
    text: "Life will give you whatever experience is most helpful for the evolution of your consciousness. How do you know this is the experience you need? Because this is the experience you are having at the moment.",
    author: "Eckhart Tolle",
    category: "action"
  },
  {
    text: "When you see a good person, think of becoming like her/him. When you see someone not so good, reflect on your own weak points.",
    author: "Confucius",
    category: "action"
  },
  {
    text: "Karma comes after everyone eventually. You can't get away with screwing people over your whole life, I don't care who you are. What goes around comes around. That's how it works. Sooner or later the universe will serve you the revenge that you deserve.",
    author: "Jessica Brody",
    category: "justice"
  },
  {
    text: "Even if things don't unfold the way you expected, don't be disheartened or give up. One who continues to advance will win in the end.",
    author: "Daisaku Ikeda",
    category: "action"
  },
  {
    text: "If you're really a mean person you're going to come back as a fly and eat poop.",
    author: "Kurt Cobain",
    category: "consequences"
  },
  {
    text: "Even chance meetings are the result of karma… Things in life are fated by our previous lives. That even in the smallest events there's no such thing as coincidence.",
    author: "Haruki Murakami",
    category: "justice"
  },
  {
    text: "It is impossible to build one's own happiness on the unhappiness of others. This perspective is at the heart of Buddhist teachings.",
    author: "Daisaku Ikeda",
    category: "compassion"
  },
  {
    text: "Life is painful. It has thorns, like the stem of a rose. Culture and art are the roses that bloom on the stem. The flower is yourself, your humanity. Art is the liberation of the humanity inside yourself.",
    author: "Daisaku Ikeda",
    category: "compassion"
  },
  {
    text: "Is Fate getting what you deserve, or deserving what you get?",
    author: "Jodi Picoult",
    category: "justice"
  },
  {
    text: "The law is simple. Every experience is repeated or suffered till you experience it properly and fully the first time.",
    author: "Ben Okri",
    category: "consequences"
  },
  {
    text: "Those who pray for your downfall are concentrating negative thoughts towards you, without taking cognisance of the slippery ground in which they are standing, which could lead to their downfall.",
    author: "Michael Bassey Johnson",
    category: "justice"
  },
  {
    text: "Like gravity, karma is so basic we often don't even notice it.",
    author: "Sakyong Mipham",
    category: "justice"
  },
  {
    text: "Not only is there often a right and wrong, but what goes around does come around, Karma exists, chickens do come home to roost, and as my mother, Phyllis, liked to say, 'There is always a day of reckoning.' The good among the great understand that every choice we make adds to the strength or weakness of our spirits—ourselves, or to use an old fashioned word for the same idea, our souls.",
    author: "Donald Van de Mark",
    category: "justice"
  },
  {
    text: "Once you've lived a little you will find that whatever you send out into the world comes back to you in one way or another. It may be today, tomorrow, or years from now, but it happens; usually when you least expect it, usually in a form that's pretty different from the original.",
    author: "Slash",
    category: "consequences"
  },

  // COMPASSION & LOVE QUOTES
  {
    text: "Love your neighbor, even the ones who do not show you the same courtesy. You can't expect to receive love if you're selective and not really willing to give it. What you put into the world, you will indeed get back, even if it's not from the person you're expecting it to be.",
    author: "Alexandra Elle",
    category: "compassion"
  },
  {
    text: "Live a good and honorable life. Then, when you are older, you can look back and enjoy it a second time.",
    author: "Dalai Lama",
    category: "action"
  },
  {
    text: "The love you send into the world, you will find, is the love that returns to you.",
    author: "Avina Celeste",
    category: "compassion"
  },
  {
    text: "In relationships, the silent treatment speaks volumes about where you stand.",
    author: "Shannon L. Alder",
    category: "compassion"
  },
  {
    text: "In love and relationships, the energy you put in is what you get back.",
    author: "Sonia Choquette",
    category: "compassion"
  },
  {
    text: "The best thing to give to your enemy is forgiveness; to an opponent, tolerance; to a friend, your heart; to your child, a good example; to a father, deference; to your mother, conduct that will make her proud of you; to yourself, respect; to all others, charity.",
    author: "Benjamin Franklin",
    category: "forgiveness"
  },

  // GREED & MATERIALISM QUOTES
  {
    text: "Greed is a bottomless pit which exhausts the person in an endless effort to satisfy the need without ever reaching satisfaction.",
    author: "Erich Fromm",
    category: "materialism"
  },
  {
    text: "Greed, in the end, fails even the greedy.",
    author: "Cathryn Louis",
    category: "materialism"
  },
  {
    text: "Greed is a fat demon with a small mouth and whatever you feed it is never enough.",
    author: "Janwillem van de Wetering",
    category: "materialism"
  },
  {
    text: "Greed is not a financial issue. It's a heart issue.",
    author: "Andy Stanley",
    category: "materialism"
  },
  {
    text: "Greed is a basic human instinct. It's not that you're greedy, it's that you want more. If you want more, more, more... you'll want still more.",
    author: "Yuval Noah Harari",
    category: "materialism"
  },
  {
    text: "Greed, like the love of comfort, is a kind of fear.",
    author: "Cyril Connolly",
    category: "materialism"
  },
  {
    text: "Greed is the lack of confidence of one's own ability to create.",
    author: "Vanna Bonta",
    category: "materialism"
  },
  {
    text: "Greed is not a desire to succeed. It is a desire to have, which is different.",
    author: "Vicki Robin",
    category: "materialism"
  },
  {
    text: "Greed is not a financial issue. It's a soul issue.",
    author: "Matshona Dhliwayo",
    category: "materialism"
  },

  // ACTION & RESPONSIBILITY QUOTES
  {
    text: "As you sow in your subconscious mind, so shall you reap in your body and environment.",
    author: "Joseph Murphy",
    category: "action"
  },
  {
    text: "You reap what you sow. If you go through life blaming others for your lack of success, you'll surely be disappointed.",
    author: "Michael Bloomberg",
    category: "action"
  },
  {
    text: "Karma is a balance sheet of life which debits and credit all your deeds. Which is audited by our creator and actions are based on what we accumulated in it.",
    author: "Abha Maryada Banerjee",
    category: "consequences"
  },
  {
    text: "The law of karma is that you reap what you sow. Actions based on hate will bring pain, actions based on love will bring joy.",
    author: "Deepak Chopra",
    category: "consequences"
  },
  {
    text: "You don't earn loyalty in a day. You earn loyalty day-by-day.",
    author: "Jeffrey Gitomer",
    category: "action"
  },
  {
    text: "You get what you give. What you put into things is what you get out of them.",
    author: "Jennifer Lopez",
    category: "action"
  },
  {
    text: "Karma is not just about the troubles, but also about surmounting them.",
    author: "Rick Springfield",
    category: "action"
  },
  {
    text: "Life is an echo. What you send out comes back. What you sow, you reap. What you give, you get. What you see in others, exists in you.",
    author: "Zig Ziglar",
    category: "consequences"
  },
  {
    text: "Karma is not just about the troubles, but also about surmounting them.",
    author: "Rick Springfield",
    category: "action"
  },
  {
    text: "Karma moves in two directions. If we act virtuously, the seed we plant will result in happiness. If we act non-virtuously, suffering results.",
    author: "Sakyong Mipham",
    category: "consequences"
  },
  {
    text: "The best revenge is to show them that your life is getting better after they're gone.",
    author: "Nitya Prakash",
    category: "action"
  },
  {
    text: "Karma bides its time. You will always have to watch out. Karma is unforgiving and always gets payback.",
    author: "Benjamin Bayani",
    category: "justice"
  },
  {
    text: "I'm a true believer in karma. You get what you give, whether it's bad or good.",
    author: "Sandra Bullock",
    category: "consequences"
  },
  {
    text: "Karma, simply put, is an action for an action, good or bad.",
    author: "Stephen Richards",
    category: "justice"
  },
  {
    text: "Karma is not just about the troubles, but also about surmounting them.",
    author: "Rick Springfield",
    category: "action"
  },
  {
    text: "It is your karma to fight evil. It doesn't matter if the people that evil is being committed against don't fight back. It doesn't matter if the entire world chooses to look the other way. Always remember this. You don't live with the consequences of other people's karma. You live with the consequences of your own.",
    author: "Amish Tripathi",
    category: "action"
  },

  // FORGIVENESS & GROWTH QUOTES
  {
    text: "Violence does, in truth, recoil upon the violent, and the schemer falls into the pit which he digs for another.",
    author: "Arthur Conan Doyle",
    category: "forgiveness"
  },
  {
    text: "The institutions of human society treat us as parts of a machine. They assign us ranks and place considerable pressure upon us to fulfill defined roles. We need something to help us restore our lost and distorted humanity. Each of us has feelings that have been suppressed and have built up inside. There is a voiceless cry resting in the depths of our souls, waiting for expression. Art gives the soul's feelings voice and form.",
    author: "Daisaku Ikeda",
    category: "forgiveness"
  },
  {
    text: "A great human revolution in just a single individual will help achieve a change in the destiny of a nation and, further, can even enable a change in the destiny of all humankind.",
    author: "Daisaku Ikeda",
    category: "action"
  },

  // JUSTICE QUOTES
  {
    text: "Injustice anywhere is a threat to justice everywhere.",
    author: "Martin Luther King Jr.",
    category: "justice"
  },
  {
    text: "Karma brings justice, not vengeance. It's the universe's way of restoring balance.",
    author: "Unknown",
    category: "justice"
  },
  {
    text: "Justice is not revenge; it's a reckoning of actions.",
    author: "Bryant H. McGill",
    category: "justice"
  },
  {
    text: "The arc of the moral universe is long, but it bends towards justice.",
    author: "Theodore Parker",
    category: "justice"
  },
  {
    text: "Karma is a potent reminder that justice is always in the works, even if it seems slow.",
    author: "Unknown",
    category: "justice"
  },
  {
    text: "Justice is not about the severity of punishment, but the fairness of it.",
    author: "Victor Adeagbo",
    category: "justice"
  },
  {
    text: "Karma is the silent witness to every injustice, ensuring that balance is restored.",
    author: "Unknown",
    category: "justice"
  },
  {
    text: "To deny people their human rights is to challenge their very humanity.",
    author: "Nelson Mandela",
    category: "justice"
  },
  {
    text: "Justice is truth in action.",
    author: "Benjamin Disraeli",
    category: "justice"
  },
  {
    text: "Karma is a cruel mistress.",
    author: "Kelley York",
    category: "consequences"
  },
  {
    text: "I must have killed a lot of cows in a past life for Karma to hate me this much.",
    author: "Katie McGarry",
    category: "consequences"
  },
  {
    text: "I was in the biggest breakdown of my life when I stopped crying long enough to let the words of my epiphany really sink in. That whore, karma, had finally made her way around, and had just bitch-slapped me right across the face. The realization only made me cry harder.",
    author: "Jennifer Salaiz",
    category: "forgiveness"
  },
  {
    text: "Oh Lestat, you deserved everything that's ever happened to you. You better not die. You might actually go to hell.",
    author: "Anne Rice",
    category: "justice"
  },
  {
    text: "The Revelation of Sonmi 451 To be is to be perceived, and so to know thyself is only possible through the eyes of the other. The nature of our immortal lives is in the consequences of our words and deeds, that go on and are pushing themselves throughout all time. Our lives are not our own. From womb to tomb, we are bound to others, past and present, and by each crime and every kindness, we birth our future.",
    author: "David Mitchell",
    category: "consequences"
  },
  {
    text: "Dear Karma, I really hate you right now, you made your point.",
    author: "Ottilie Weber",
    category: "forgiveness"
  }
];

// Get all unique authors and sort them
function getUniqueAuthors() {
  const authors = [...new Set(karmaQuotes.map(q => q.author))];
  return authors.sort();
}

// Initialize author filter buttons
function initializeAuthorFilters() {
  const authorFiltersContainer = document.getElementById('author-filters');
  const uniqueAuthors = getUniqueAuthors();
  
  // Clear existing buttons (keep "All Authors")
  authorFiltersContainer.innerHTML = '<button class="filter-btn active" data-author="all">All Authors</button>';
  
  // Add author buttons
  uniqueAuthors.forEach(author => {
    const btn = document.createElement('button');
    btn.className = 'filter-btn';
    btn.textContent = author;
    btn.setAttribute('data-author', author);
    btn.addEventListener('click', function() {
      filterQuotes('author', author);
    });
    authorFiltersContainer.appendChild(btn);
  });
}

// Store current filters
let currentFilters = {
  category: 'all',
  author: 'all'
};

// Filter quotes
function filterQuotes(filterType, filterValue) {
  currentFilters[filterType] = filterValue;
  
  // Update active button states
  updateActiveButtons();
  
  // Get all quote cards
  const quoteCards = document.querySelectorAll('.quote-card');
  let visibleCount = 0;
  
  quoteCards.forEach(card => {
    const cardCategory = card.getAttribute('data-category');
    const cardAuthor = card.getAttribute('data-author');
    
    const categoryMatch = currentFilters.category === 'all' || cardCategory === currentFilters.category;
    const authorMatch = currentFilters.author === 'all' || cardAuthor === currentFilters.author;
    
    if (categoryMatch && authorMatch) {
      card.classList.remove('hidden');
      visibleCount++;
    } else {
      card.classList.add('hidden');
    }
  });
  
  // Show no results message
  const noResults = document.getElementById('no-results');
  if (visibleCount === 0) {
    noResults.style.display = 'block';
  } else {
    noResults.style.display = 'none';
  }
  
  // Update info text
  updateFilterInfo(visibleCount);
}

// Update active button states
function updateActiveButtons() {
  // Update category buttons
  document.querySelectorAll('.category-filter').forEach(btn => {
    const btnValue = btn.getAttribute('data-filter');
    if (btnValue === currentFilters.category) {
      btn.classList.add('active');
    } else {
      btn.classList.remove('active');
    }
  });
  
  // Update author buttons
  document.querySelectorAll('[data-author]').forEach(btn => {
    const btnValue = btn.getAttribute('data-author');
    if (btnValue === currentFilters.author) {
      btn.classList.add('active');
    } else {
      btn.classList.remove('active');
    }
  });
  
  // Re-apply the correct active state
  document.querySelectorAll('.filter-btn').forEach(btn => {
    const filterValue = btn.getAttribute('data-filter') || btn.getAttribute('data-author');
    const isActive = (btn.getAttribute('data-filter') && currentFilters.category === filterValue) ||
                     (btn.getAttribute('data-author') && currentFilters.author === filterValue);
    
    if (isActive) {
      btn.classList.add('active');
    } else {
      btn.classList.remove('active');
    }
  });
}

// Update filter info text
function updateFilterInfo(count) {
  const infoDiv = document.getElementById('filter-info');
  
  if (currentFilters.category === 'all' && currentFilters.author === 'all') {
    infoDiv.textContent = `Showing ${count} quotes`;
  } else {
    let filterText = [];
    if (currentFilters.category !== 'all') {
      filterText.push(`category: ${currentFilters.category}`);
    }
    if (currentFilters.author !== 'all') {
      filterText.push(`author: ${currentFilters.author}`);
    }
    infoDiv.textContent = `Showing ${count} quote(s) matching ${filterText.join(' and ')}`;
  }
}

// Reset all filters
function resetAllFilters() {
  currentFilters.category = 'all';
  currentFilters.author = 'all';
  filterQuotes('category', 'all');
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.classList.remove('active');
    if ((btn.getAttribute('data-filter') === 'all' || btn.getAttribute('data-author') === 'all')) {
      btn.classList.add('active');
    }
  });
}

// Render quotes
function renderQuotes() {
  const container = document.getElementById('quotes-container');
  container.innerHTML = '';
  
  karmaQuotes.forEach(quote => {
    const quoteCard = document.createElement('div');
    quoteCard.className = `quote-card ${quote.category}`;
    quoteCard.setAttribute('data-category', quote.category);
    quoteCard.setAttribute('data-author', quote.author);
    
    quoteCard.innerHTML = `
      <p class="quote-text">"${quote.text}"</p>
      <p class="quote-author">— ${quote.author}</p>
      <span class="quote-category">${capitalizeFirstLetter(quote.category)}</span>
    `;
    
    container.appendChild(quoteCard);
  });
  
  // Re-apply filters
  filterQuotes('category', 'all');
  updateFilterInfo(karmaQuotes.length);
}

// Capitalize first letter
function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

// Set up category filter event listeners
function setupCategoryFilters() {
  document.querySelectorAll('[data-filter]').forEach(btn => {
    btn.addEventListener('click', function() {
      const filterValue = this.getAttribute('data-filter');
      filterQuotes('category', filterValue);
    });
    // Add class for category buttons
    btn.classList.add('category-filter');
  });
}

// Initialize on DOM load
document.addEventListener('DOMContentLoaded', function() {
  renderQuotes();
  initializeAuthorFilters();
  setupCategoryFilters();
  updateFilterInfo(karmaQuotes.length);
});
