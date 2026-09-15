# Goal
* Practice git commands and branching strategy
* Read class diagrams
* Review inheritance concepts
* Review composition/agregation/association relationship
* Teamwork

# Class diagram
```mermaid
classDiagram
   class Game {
    -field: Field
    -date: Date
	-ball: Ball
    -teams: ArrayList<Team>
    +start()
  }

  class Field {
    -size: int
    +light()
  }

  class Team {
    -name: String
	-coach: Coach
    -players: ArrayList<Player>
    +play()
  }
  class Ball {
    -material: String
    +move()
  }
 
   class Person {
    -age: int
    +run()
  }

  class Player {
    -position: String
    +passBall()
  }

    

   class Coach {
    -style: String
    +train()
  }      


  class Goalkeeper {
    -globes: boolean
    +block(ball: Ball)
  }  

  class Defender {
    -mark: boolean
    +steal(ball: Ball)
  }

  class Midfielder {
    -vision: boolean
    +organize()
  }

  class Forward {
    -killer: boolean
    +drible()
    +kick(ball: Ball)
  } 
    Person <|..  Player : extends
    Person <|..  Coach : extends
    Player <|.. Goalkeeper : extends
    Player <|.. Defender : extends
    Player <|.. Midfielder : extends
    Player <|.. Forward : extends  
    Game "1" *-- "1" Field: part-of
    Game "1" *-- "1" Ball: part-of
    Game "1" o-- "2" Team : has-a
    Team "1" *-- "11" Player : part-of

    
```

# Implementation
1. Create repository using this template to group git account
2. Check Game Class diagram and current implementation to identify what is pending to do
3. Assign every issue to a group member
4. Create a branch for each issue
5. Clone repository in local environment
6. Check out to corresponding branch
7. Code the change described in issue
8. Push from your local environment to your repository
9. Create a pull request from member branch to master branch
10. Resolve conflicts(if apply)
11. Merge 
12. Review if issue is closed
