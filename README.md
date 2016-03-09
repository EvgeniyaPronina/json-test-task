Hello!
My name is Evgeniya and this is my answer to test task

How-to install
$ git clone https://github.com/EvgeniyaPronina/json-test-task.git

This is the task

Active Freedom - Test V1.2

// Important Update 

Dear Candidates, Thank you so much for your submissions
We have noticed some of the candidates are taking approaches such as passing or parsing data from files or generating data using functions.
There is no need to do so, our testing app will generate a super large string like shown below and pass it through your function.

Your code will be placed in the following function:


function removeLowScoredYYY($string)
{

    Do some really cool (and efficient) stuff!

        return some result
    }
}

// EO Update

The following tests are designed to assess both your programming skill level, speed and most importantly logic and thinking approach.

Please read all details carefully, and ask for any clarification if needed.
Your results will be inputted into a benchmark testing unit which will compare results against a baseline and other candidates.

Your solution should focus on: Speed, speed, speed! Resource consumption, code readability

Eliminate  Lowest Score for specific criteria (est. time 15 min): 

(  Task was edited because it’s a lot of candidates and it’s start to be very hard to compare their results in one test. We look at code style and whole approach.  )

A JSON string with over 100000 elements is passed to your function.
The sting is already SORTED and will contain data as shown in the example below.

 [{"_id":"4940dgfd95jfsd9","score":15,"user":0,"type":"xxx"},
  {"_id":"4940dsdsvhjttt89","score":4,"user":0,"type":"yyy"},
  {"_id":"4941dgfdsdfggd9","score":7,"user":0,"type":"yyy"},
  {"_id":"4941dfds43rfsff9","score":21,"user":1,"type":"yyy"},
  {"_id":"4941dgfd93jfsd0","score":15,"user":1,"type":"xxx"},
  {"_id":"4942dgdsadvfd9","score":8,"user":1,"type":"yyy"},
  {"_id":"4942dgfdaefcod8","score":4,"user":2,"type":"yyy"},
  {"_id":"4942dgfdsarfsd1","score":32,"user":2,"type":"yyy"},
  {"_id":"4943dgfddasjfsd5","score":20,"user":2,"type":"xxx"},
  {"_id":"4943dasrtqxrfsd9","score":15,"user":3,"type":"xxx"},
  {"_id":"4943dgfooorafsd8","score":15,"user":3,"type":"yyy"},
  {"_id":"4944dgfddadfsd3","score":15,"user":3,"type":"yyy"},
  {"_id":"4944dgfd9dssdc4","score":15,"user":4,"type":"xxx"},
  {"_id":"4944dgdacbbrttt9","score":19,"user":4,"type":"yyy"},
  {"_id":"4945dgfsaddddd5","score":15,"user":4,"type":"xxx"}]

Write a function that would produce the following:

Find and DELETE the lowest score for each of row of type ‘yyy’ for each user.
- If All scores are Identical for a user. Keep only one result
- If a user only have one score of type ‘yyy’, DO NOT DELETE score.
return a string formatted as above.

Note: Feel free to write several versions of the code, we will keep the optimal result.



Programming Task (15 minutes)


You have given string which came through inputstream, string can be enormously large, here is short example:

[
  {
    "_id":1364,"name":"Predator","occupations":[
      {"title":"exploring","time":54.9,"activityLevel":1},
      {"title":"hunting","time":22.4,"activityLevel":2},
      {"title":"sleep","time":5.1,"activityLevel":0},
      {"title":"nap","time":2.0,"activityLevel":0},
      {"title":"slacking","time":10.0,"activityLevel":0},
      {"title":"cooking","time":9.0,"activityLevel":1}
    ]
  },
  {
    "_id":1365,"name":"Alien","occupations":[
      {"title":"sleep","time":5.1,"activityLevel":0},
      {"title":"nap","time":2.0,"activityLevel":0},
      {"title":"exploring","time":32.1,"activityLevel":1},
      {"title":"slacking","time":20.1,"activityLevel":0},
      {"title":"cooking","time":0,"activityLevel":1},
      {"title":"hunting","time":43.2,"activityLevel":2}
    ]
  },
  {
    "_id":1366,"name":"Harry Potter","occupations":[
      {"title":"sleep","time":30.0,"activityLevel":0},
      {"title":"exploring","time":10.5,"activityLevel":1},
      {"title":"slacking","time":30.1,"activityLevel":0},
      {"title":"cooking","time":0,"activityLevel":1},
      {"title":"dreaming","time":10.0,"activityLevel":0},
      {"title":"nap","time":10.0,"activityLevel":0},
      {"title":"hunting","time":0,"activityLevel":2}
    ]
  }
]

Write code using one of the languages: PHP, JS or Java. Your code need to remove occupations activity with the smallest time value and this activity need to be not intensive one.
Please return same string after removing those elements.

