export class Job {
  title: string
  city: string
  wage: number
  seniority: "Júnior" | "Pleno" | "Sênior"
  modality: "Presencial" | "Remoto" | "Híbrido"
  postDate: string
  company: Company

  constructor(job: Job) {
    this.title = job.title;
    this.city = job.city;
    this.wage = job.wage;
    this.seniority = job.seniority;
    this.modality = job.modality;
    this.postDate = job.postDate;
    this.company = job.company;
  }

  getDateStr(): string {
    const now = new Date()
    console.log(JSON.stringify(this))
    const date = this.postDate.substring(0, 10);
    const postDate = new Date(date)
    const dias = Math.ceil(Math.abs(now.getTime() - postDate.getTime()) / (1000 * 60 * 60 * 24))
    switch (dias) {
      case 0:
        return "Hoje"
      case 1:
        return "Ontem"
      default:
        if (dias <= 13) {
          return "Há uma semana"
        } else if (dias < 31) {
          return Math.round(dias / 7) + " semanas atrás"
        } else if (dias < 62){
          return "Há um mês"
        } else {
          return Math.round(dias / 30) + " meses atrás"
        }
    }
  }
}

type Company = {
  name: string,
  email: string,
  profilePicture: string
}
